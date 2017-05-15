<?php

namespace common\models\base;

use Yii;
use common\models\Application;
use common\models\Commitment;
use common\models\History;
use common\models\User;

/**
 * This is the model class for table "{{%profile}}".
*
    * @property integer $id
    * @property integer $user_id
    * @property string $givenName
    * @property string $familyName
    * @property string $preferredName
    * @property string $phone1
    * @property string $phone2
    * @property string $address1
    * @property string $address2
    * @property string $locality
    * @property string $state
    * @property string $postcode
    * @property string $country
    * @property string $emergencyContact
    * @property string $emergencyPhone1
    * @property string $emergencyPhone2
    * @property integer $rsa
    * @property integer $dl_c
    * @property integer $dl_h
    * @property integer $cse
    * @property integer $ohs
    * @property integer $bc
    * @property integer $vol
    * @property integer $mmfVol
    * @property integer $mmfAtt
    * @property integer $returned
    * @property string $dnr
    * @property string $discovery
    * @property string $discoveryDetail
    * @property string $email
    * @property string $timezone
    * @property string $full_name
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property Application[] $applications
            * @property Commitment[] $commitments
            * @property History[] $histories
            * @property User $user
    */
class ProfileBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%profile}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'bc', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'created_by', 'updated_by'], 'integer'],
            [['givenName', 'familyName', 'phone1', 'address1', 'locality', 'emergencyContact', 'emergencyPhone1', 'discovery'], 'required'],
            [['dnr', 'created_at', 'updated_at'], 'safe'],
            [['givenName', 'familyName', 'preferredName', 'locality', 'emergencyContact'], 'string', 'max' => 64],
            [['phone1', 'phone2', 'state', 'postcode', 'country', 'emergencyPhone1', 'emergencyPhone2'], 'string', 'max' => 32],
            [['address1', 'address2', 'discoveryDetail', 'email', 'timezone', 'full_name'], 'string', 'max' => 255],
            [['discovery'], 'string', 'max' => 24],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'user_id' => 'User ID',
    'givenName' => 'Given Name',
    'familyName' => 'Family Name',
    'preferredName' => 'Preferred Name',
    'phone1' => 'Phone1',
    'phone2' => 'Phone2',
    'address1' => 'Address1',
    'address2' => 'Address2',
    'locality' => 'Locality',
    'state' => 'State',
    'postcode' => 'Postcode',
    'country' => 'Country',
    'emergencyContact' => 'Emergency Contact',
    'emergencyPhone1' => 'Emergency Phone1',
    'emergencyPhone2' => 'Emergency Phone2',
    'rsa' => 'Rsa',
    'dl_c' => 'Dl C',
    'dl_h' => 'Dl H',
    'cse' => 'Cse',
    'ohs' => 'Ohs',
    'bc' => 'Bc',
    'vol' => 'Vol',
    'mmfVol' => 'Mmf Vol',
    'mmfAtt' => 'Mmf Att',
    'returned' => 'Returned',
    'dnr' => 'Dnr',
    'discovery' => 'Discovery',
    'discoveryDetail' => 'Discovery Detail',
    'email' => 'Email',
    'timezone' => 'Timezone',
    'full_name' => 'Full Name',
    'created_at' => 'Created At',
    'created_by' => 'Created By',
    'updated_at' => 'Updated At',
    'updated_by' => 'Updated By',
];
}

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getApplications()
    {
    return $this->hasMany(Application::className(), ['profile_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getCommitments()
    {
    return $this->hasMany(Commitment::className(), ['profile_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getHistories()
    {
    return $this->hasMany(History::className(), ['profile_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getUser()
    {
    return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
}
}