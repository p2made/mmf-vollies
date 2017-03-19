<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[HistoryItem]].
 *
 * @see HistoryItem
 */
class HistoryItemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HistoryItem[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HistoryItem|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
