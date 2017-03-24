<?php

namespace common\models\base;

use Yii;
use common\models\User;

/**
 * This is the model class for table "role".
*
    * @property integer $id
    * @property string $name
    * @property integer $can_admin
    * @property string $created_at
    * @property string $updated_at
    *
            * @property User[] $users
    */
class RoleBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'role';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['name'], 'required'],
            [['can_admin'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'name' => 'Name',
    'can_admin' => 'Can Admin',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
];
}

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getUsers()
    {
    return $this->hasMany(User::className(), ['role_id' => 'id']);
    }
}