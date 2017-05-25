<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use dektrium\user\helpers\Timezone;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\Profile $model
 */

common\assets\VolliesFormsAsset::register($this);

$this->title = 'Volunteer Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-3">
				<?= $this->render('_menu') ?>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?= Html::encode($this->title) ?>
					</div>
					<div class="panel-body">
						<?= $this->render('_profile', ['model' => $model]) ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
