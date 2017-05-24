<?php

use yii\bootstrap\Html;
use amnah\yii2\user\helpers\Timezone;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use p2m\helpers\FA;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\Profile $profile
 */

common\assets\VolliesFormsAsset::register($this);

$this->title = 'Volunteer ' . Yii::t('user', 'Profile');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="box">
		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
		</div>

		<?= $this->render('_profile', [
			'model' => $profile,
		]) ?>

	</div>

</div>
<!-- /.container -->
