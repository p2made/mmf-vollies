<?php

namespace common\models;

use Yii;
use \common\models\base\UserAuth as BaseUserAuth;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_auth".
 */
class UserAuth extends BaseUserAuth
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
