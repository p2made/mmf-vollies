<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'user_id') ?>

	<?= $form->field($model, 'givenName') ?>

	<?= $form->field($model, 'familyName') ?>

	<?= $form->field($model, 'preferredName') ?>

	<?= $form->field($model, 'phone1') ?>

	<?php // echo $form->field($model, 'phone2') ?>

	<?php // echo $form->field($model, 'address1') ?>

	<?php // echo $form->field($model, 'address2') ?>

	<?php // echo $form->field($model, 'locality') ?>

	<?php // echo $form->field($model, 'state') ?>

	<?php // echo $form->field($model, 'postcode') ?>

	<?php // echo $form->field($model, 'country') ?>

	<?php // echo $form->field($model, 'emergencyContact') ?>

	<?php // echo $form->field($model, 'emergencyPhone1') ?>

	<?php // echo $form->field($model, 'emergencyPhone2') ?>

	<?php // echo $form->field($model, 'rsa') ?>

	<?php // echo $form->field($model, 'dl_c') ?>

	<?php // echo $form->field($model, 'dl_h') ?>

	<?php // echo $form->field($model, 'cse') ?>

	<?php // echo $form->field($model, 'ohs') ?>

	<?php // echo $form->field($model, 'bc') ?>

	<?php // echo $form->field($model, 'fa') ?>

	<?php // echo $form->field($model, 'vol') ?>

	<?php // echo $form->field($model, 'mmfVol') ?>

	<?php // echo $form->field($model, 'mmfAtt') ?>

	<?php // echo $form->field($model, 'returned') ?>

	<?php // echo $form->field($model, 'dnr') ?>

	<?php // echo $form->field($model, 'discovery') ?>

	<?php // echo $form->field($model, 'discoveryDetail') ?>

	<?php // echo $form->field($model, 'timezone') ?>

	<?php // echo $form->field($model, 'created_at') ?>

	<?php // echo $form->field($model, 'updated_at') ?>

	<?php // echo $form->field($model, 'name') ?>

	<?php // echo $form->field($model, 'public_email') ?>

	<?php // echo $form->field($model, 'gravatar_email') ?>

	<?php // echo $form->field($model, 'gravatar_id') ?>

	<?php // echo $form->field($model, 'location') ?>

	<?php // echo $form->field($model, 'website') ?>

	<?php // echo $form->field($model, 'bio') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
