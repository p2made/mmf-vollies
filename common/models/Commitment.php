<?php

namespace common\models;

use Yii;
use \common\models\base\Commitment as BaseCommitment;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "commitment".
 */
class Commitment extends BaseCommitment
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
