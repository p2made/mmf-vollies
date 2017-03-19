<?php

namespace common\models;

use Yii;
use \common\models\base\HistoryItem as BaseHistoryItem;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "HistoryItem".
 */
class HistoryItem extends BaseHistoryItem
{

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
             ]
        );
    }
}
