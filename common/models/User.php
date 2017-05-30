<?php

namespace common\models;

use Yii;
use \common\models\base\User as BaseUser;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_user".
 */
class User extends BaseUser
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
