<?php
/**
 * __blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;
use kartik\detail\DetailView;
use kartik\grid\GridView;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model       common\models\Application */
/* @var $profile     common\models\Profile */
/* @var $commitments common\models\Commitment */

$this->title = $model->vollieName . ' (preferred: ' . $model->preferredName . ')';
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];

$attrModel = array();
?>
<div id="content-wrapper">
	<div class="application-view">

		<div class="row">
			<div class="col-md-12">
				<h3>Application</h3>
			</div>
			<div class="col-md-3">
				<?= DetailView::widget([
					'model' => $model,
					'panel' => [
						'heading' => 'Preferred Jobs',
						'headingOptions' => ['template' => '{title}'],
						'type' => 'primary',
					],
					'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
					'attributes' => [
						[
							'attribute' => 'jobPreference1',
							'label' => '1',
							'displayOnly' => true,
						],
						[
							'attribute' => 'jobPreference2',
							'label' => '2',
							'displayOnly' => true,
						],
						[
							'attribute' => 'jobPreference3',
							'label' => '3',
							'displayOnly' => true,
						],
					],
					'hAlign' => 'right',
					'vAlign' => 'middle',
					'mode' => 'view',
					//'condensed' => true,
				]) ?>
			</div>
			<div class="col-md-9">
				<?= DetailView::widget([
					'model' => $model,
					'panel' => [
						'heading' => 'Availability',
						'headingOptions' => ['template' => '{title}'],
						'type' => 'primary',
					],
					'labelColOptions' => ['style' => 'width:15%', 'class' => 'text-right'],
					'attributes' => [
						[
							'columns' => [
								[
									'attribute' => 'availableFrom',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:25%'],
								],
								[
									'attribute' => 'availableTo',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:25%'],
								],
								[
									'attribute' => 'earlyLate',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:5%'],
								],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'availabilityNotes',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:65%'],
								],
								[
									'attribute' => 'double',
									'format' => 'raw',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:5%'],
									'label' => 'Double Shift',
									'value' => $model->double
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
							],
						],
					],
					'hAlign' => 'right',
					'vAlign' => 'middle',
					'mode' => 'view',
					//'condensed' => true,
				]) ?>
			</div>
			<div class="col-md-12">
				<?= DetailView::widget([
					'model' => $model,
					'panel' => [
						'heading' => 'Other Info',
						'headingOptions' => ['template' => '{title}'],
						'type' => 'primary',
					],
					'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
					'attributes' => [
						[
							'columns' => [
								[
									'attribute' => 'referee',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:23%'],
								],
								[
									'attribute' => 'refereeRelationship',
									'label' => 'Relationship',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:24%'],
								],
								[
									'attribute' => 'refereePhone',
									'label' => 'Phone',
									'displayOnly' => true,
									'valueColOptions' => ['style' => 'width:23%'],
								],
							],
						],
						[
							'attribute' => 'otherNotes',
							'displayOnly' => true,
							'valueColOptions' => ['style' => 'width:90%'],
						],
						[
							'attribute' => 'bestCallingTime',
							'displayOnly' => true,
							'labelColOptions' => ['style' => 'width:15%', 'class' => 'text-right'],
							'valueColOptions' => ['style' => 'width:85%'],
						],
					],
					'hAlign' => 'right',
					'vAlign' => 'middle',
					'mode' => 'view',
					//'condensed' => true,
				]) ?>
			</div>
		</div><!-- / Application -->

		<div class="row">
			<div class="col-md-12">
				<h3>Volunteer Info</h3>
			</div>
			<div class="col-md-5">
				<?= DetailView::widget([
					'model' => $profile,
					'panel' => [
						'heading' => 'Contact Details',
						'headingOptions' => ['template' => '{title}'],
						'type' => 'primary',
					],
					'labelColOptions' => ['style' => 'width:35%', 'class' => 'text-right'],
					'attributes' => [
						[
							'attribute' => 'phone1',
							'displayOnly' => true,
						],
						[
							'attribute' => 'phone2',
							'displayOnly' => true,
						],
						[
							'attribute' => 'email',
							'displayOnly' => true,
						],
					],
					'hAlign' => 'right',
					'vAlign' => 'middle',
					'mode' => 'view',
					//'bootstrap' => true,
					//'bordered' => true,
					//'striped' => true,
					//'condensed' => false,
					//'responsive' => true,
					//'hover' => false,
				]) ?>

				<?php if ($commitments): ?>
				<?php endif ?>

			</div>
			<div class="col-md-7">
				<?= DetailView::widget([
					'model' => $profile,
					'panel' => [
						'heading' => 'Experience & Useful Attributes',
						'headingOptions' => ['template' => '{title}'],
						'type' => 'primary',
					],
					'labelColOptions' => ['style' => 'width:40%', 'class' => 'text-right'],
					'valueColOptions' => ['style' => 'width:10%', 'class' => 'text-center'],
					'attributes' => [
						[
							'columns' => [
								[
									'attribute' => 'vol',
									'format' => 'raw',
									'displayOnly' => true,
									'label' => 'Has volunteered before',
									'value' => $profile->vol
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								[
									'attribute' => 'mmfVol',
									'format' => 'raw',
									'displayOnly' => true,
									'label' => 'Has volunteered at MMF',
									'value' => $profile->mmfVol
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'mmfAtt',
									'format' => 'raw',
									'displayOnly' => true,
									'label' => 'Has attended MMF',
									'value' => $profile->mmfAtt
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								['label' => '', 'value' => ''],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'rsa',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->rsa
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								[
									'attribute' => 'dl_c',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->dl_c
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'dl_h',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->dl_h
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								[
									'attribute' => 'cse',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->cse
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'ohs',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->ohs
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								[
									'attribute' => 'bc',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->bc
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
							],
						],
						[
							'columns' => [
								[
									'attribute' => 'fa',
									'format' => 'raw',
									'displayOnly' => true,
									'value' => $profile->fa
										? '<span class="label label-success">Yes</span>'
										: '<span class="label label-danger">No</span>',
								],
								['label' => '', 'value' => ''],
							],
						],
					],
					'vAlign' => 'middle',
					'mode' => 'view',
					//'bootstrap' => true,
					//'bordered' => true,
					//'striped' => true,
					//'condensed' => false,
					//'responsive' => true,
					//'hover' => false,
				]) ?>
			</div>
		</div><!-- / Volunteer Info -->

	</div>
</div>
