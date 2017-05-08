<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ApplicationJob]].
 *
 * @see ApplicationJob
 */
class ApplicationJobQuery extends \yii\db\ActiveQuery
{
	/*public function active()
	{
		return $this->andWhere('[[status]]=1');
	}*/

	/**
	 * @inheritdoc
	 * @return ApplicationJob[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * @inheritdoc
	 * @return ApplicationJob|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
