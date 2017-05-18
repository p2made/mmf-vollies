<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[JobMenuGroup]].
 *
 * @see JobMenuGroup
 */
class JobMenuGroupQuery extends \yii\db\ActiveQuery
{
	/*public function active()
	{
		$this->andWhere('[[status]]=1');
		return $this;
	}*/

	/**
	 * @inheritdoc
	 * @return JobMenuGroup[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * @inheritdoc
	 * @return JobMenuGroup|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
