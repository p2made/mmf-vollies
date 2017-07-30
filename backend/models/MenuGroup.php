<?php

namespace backend\models;

use Yii;
use \backend\models\base\MenuGroup as BaseMenuGroup;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_menu_group".
 */
class MenuGroup extends BaseMenuGroup
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
