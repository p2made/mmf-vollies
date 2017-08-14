<?php
/**
 * JobController.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

namespace backend\controllers;

use Yii;
use backend\models\Job;
use backend\models\JobSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use kartik\grid\EditableColumnAction;

/**
 * JobController implements the CRUD actions for Job model.
 *
 * @property integer $id
 * @property integer $team_id
 * @property integer $group_id
 * @property integer $sequence
 * @property string $name
 * @property string $shortName
 * @property string $description
 * @property integer $required
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Application[] $applications0
 * @property \common\models\Application[] $applications1
 * @property \common\models\MenuGroup $group
 * @property \common\models\Team $team
 * @property string $aliasModel
 *
 * @property string $teamName
 */
class JobController extends Controller
{
	public function actions()
	{
		return ArrayHelper::merge(parent::actions(), [
			'editjob' => [ // identifier for your editable action
				'class' => EditableColumnAction::className(),
				'modelClass' => Job::className(),
				'outputValue' => function ($model, $attribute, $key, $index) {
					$fmt = Yii::$app->formatter;
					$value = $model->$attribute;     // your attribute value
					if ($attribute === 'required') { // selective validation by attribute
						return $fmt->asDecimal($value, 0); // return formatted value if desired
					// } elseif ($attribute === 'publish_date') { // selective validation by attribute
						// return $fmt->asDate($value, 'php:Y-m-d'); // return formatted value if desired
					}
					return ''; // empty is same as $value
				},
				'outputMessage' => function($model, $attribute, $key, $index) {
					return ''; // any custom error after model save
				},
				// 'showModelErrors' => true,         // show model errors after save
				// 'errorOptions' => ['header' => ''] // error summary HTML options
				// 'postOnly' => true,
				// 'ajaxOnly' => true,
				// 'findModel' => function($id, $action) {},
				// 'checkAccess' => function($action, $model) {}
			],
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	/**
	 * Lists all Job models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new JobSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Job model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new Job model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Job();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Job model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Job model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the Job model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Job the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Job::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
