<?php
/**
 * _create.php
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
use kartik\builder\FormGrid;
use p2m\helpers\FA;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 */

/* @var $this yii\web\View */
/* @var $model       backend\models\Commitment */
/* @var $application backend\models\Application */
/* @var $profile     backend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="commitment-form">
	<div class="row">

		<div class="col-md-12">
		<!-- <div class="col-md-4 col-md-offset-8"> -->

			<div class="panel panel-primary">
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]); ?>
					<div class="row">

						<div class="col-md-12">
							<?php echo FormGrid::widget([
								'model' => $model, 'form' => $form,
								'autoGenerateColumns' => true,
								'rows' => [
									[
										'columns' => 4,
										'attributes' => [
											'user_id' => ['type' => Form::INPUT_TEXT],
											'application_id' => ['type' => Form::INPUT_TEXT],
											'job_id' => ['type' => Form::INPUT_TEXT],
											'jobName' => ['type' => Form::INPUT_TEXT],
										],
									],
									[
										'columns' => 4,
										'attributes' => [
											'year' => ['type' => Form::INPUT_TEXT],
											'hours' => ['type' => Form::INPUT_TEXT],
											'report' => ['type' => Form::INPUT_TEXT],
											'reinvite' => ['type' => Form::INPUT_TEXT],
										],
									],
								],
							]) ?>

							<?= Html::submitButton('Assign', ['class' => 'btn btn-success']) ?>
						</div>

					</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>

		</div>

	</div>
</div>
