<?php
/**
 * _form.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model backend\models\Application */
/* @var $form yii\widgets\ActiveForm */

$jobTeams = array(
	1 => 1,
	2 => 1,
	3 => 1,
	4 => 3,
	5 => 4,
	6 => 2,
	7 => 4,
	8 => 3,
	9 => 3,
	10 => 3,
	11 => 2,
	12 => 7,
	13 => 5,
	14 => 2,
	15 => 8,
	16 => 5,
	17 => 6,
	18 => 4,
	19 => 7,
	20 => 9,
	22 => 11,
	23 => 11,
	24 => 11,
	25 => 11,
	26 => 11,
	27 => 11,
	28 => 11,
	30 => 11,
	31 => 11,
	32 => 11,
	33 => 11,
	34 => 11,
	35 => 11,
	37 => 11,
);

/*
 * 0 - Pending
 * 1 - Accepted
 * 2 - Cancelled
 * 3 - Rejected
 */
?>
<div class="application-form">
	<div class="row">
		<div class="col-md-4">

			<div class="panel panel-primary">
				<div class="panel-body">
					<?php $form = ActiveForm::begin(); ?>
					<div class="row">
						<div class="col-md-9">
							<?php echo Form::widget([
								'model' => $model,
								'form' => $form,
								'attributes' => [
									'status' => [
										'type' => Form::INPUT_RADIO_LIST,
										'items' => [
											1 => 'Assign to Job',
											2 => 'Cancel',
											3 => 'Reject',
										],
										'options' => ['inline' => true],
									],
									'label' => 'Application Actions...'
								]
							]) ?>

						</div>
						<div class="col-md-3">
							<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
						</div>
					</div>



					<?php ActiveForm::end(); ?>

				</div>
			</div>

		</div>
	</div>
</div>
