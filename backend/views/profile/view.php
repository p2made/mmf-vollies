<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Profile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'givenName',
            'familyName',
            'preferredName',
            'phone1',
            'phone2',
            'address1',
            'address2',
            'locality',
            'state',
            'postcode',
            'country',
            'emergencyContact',
            'emergencyPhone1',
            'emergencyPhone2',
            'rsa',
            'dl_c',
            'dl_h',
            'cse',
            'ohs',
            'bc',
            'fa',
            'vol',
            'mmfVol',
            'mmfAtt',
            'returned',
            'dnr',
            'discovery',
            'discoveryDetail',
            'timezone',
            'created_at',
            'updated_at',
            'name',
            'public_email:email',
            'gravatar_email:email',
            'gravatar_id',
            'location',
            'website',
            'bio:ntext',
        ],
    ]) ?>

</div>
