<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Application]].
 *
 * @see Application
 */
class ApplicationQuery extends \yii\db\ActiveQuery
{
	/*public function active()
	{
		$this->andWhere('[[status]]=1');
		return $this;
	}*/

	/**
	 * @inheritdoc
	 * @return Application[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * @inheritdoc
	 * @return Application|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
