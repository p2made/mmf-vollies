<?php

namespace backend\models;

use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Team;
use backend\models\Job;

/**
 * This is the model class for table "mmf_team".
 *
 * @property integer $id
 * @property integer $head_id
 * @property integer $sequence
 * @property string $name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Job[] $jobs
 * @property \common\models\Profile $head
 * @property string $aliasModel
 */
class WorkArea extends \yii\base\Model
{
	// virtual attributes
	private $_team;
	private $_jobs[];
	public $headName;
	public $preferredName;

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				# custom validation rules
				[['headName'], 'safe'],
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'head_id' =>     'Head ID',
			'headName' =>    'Head Name',
			'sequence' =>    'Sequence',
			'name' =>        'Name',
			'description' => 'Description',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

	}

	public function getHeadName()
	{
		if ($this->headName) {
			return $this->headName;
		}

		return $this->headName = $this->head->vollieName;
	}

	public function getPreferredName()
	{
		if ($this->preferredName) {
			return $this->preferredName;
		}

		return $this->preferredName = $this->head->preferredName;
	}

}
?>


<?php
class ProductForm extends Model
{
	private $_product;
	private $_parcel;

	public function rules()
	{
		return [
			[['Product'], 'required'],
			[['Parcel'], 'safe'],
		];
	}

	public function afterValidate()
	{
		$error = false;
		if (!$this->product->validate()) {
			$error = true;
		}
		if (!$this->parcel->validate()) {
			$error = true;
		}
		if ($error) {
			$this->addError(null); // add an empty error to prevent saving
		}
		parent::afterValidate();
	}

	public function save()
	{
		if (!$this->validate()) {
			return false;
		}
		$transaction = Yii::$app->db->beginTransaction();
		if (!$this->product->save()) {
			$transaction->rollBack();
			return false;
		}
		$this->parcel->product_id = $this->product->id;
		if (!$this->parcel->save(false)) {
			$transaction->rollBack();
			return false;
		}
		$transaction->commit();
		return true;
	}

	public function getProduct()
	{
		return $this->_product;
	}

	public function setProduct($product)
	{
		if ($product instanceof Product) {
			$this->_product = $product;
		} else if (is_array($product)) {
			$this->_product->setAttributes($product);
		}
	}

	public function getParcel()
	{
		if ($this->_parcel === null) {
			if ($this->product->isNewRecord) {
				$this->_parcel = new Parcel();
				$this->_parcel->loadDefaultValues();
			} else {
				$this->_parcel = $this->product->parcel;
			}
		}
		return $this->_parcel;
	}

	public function setParcel($parcel)
	{
		if (is_array($parcel)) {
			$this->parcel->setAttributes($parcel);
		} elseif ($parcel instanceof Parcel) {
			$this->_parcel = $parcel;
		}
	}

	public function errorSummary($form)
	{
		$errorLists = [];
		foreach ($this->getAllModels() as $id => $model) {
			$errorList = $form->errorSummary($model, [
				'header' => '<p>Please fix the following errors for <b>' . $id . '</b></p>',
			]);
			$errorList = str_replace('<li></li>', '', $errorList); // remove the empty error
			$errorLists[] = $errorList;
		}
		return implode('', $errorLists);
	}

	private function getAllModels()
	{
		return [
			'Product' => $this->product,
			'Parcel' => $this->parcel,
		];
	}
}
