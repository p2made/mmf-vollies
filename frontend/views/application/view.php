<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/d4b4964a63cc95065fa0ae19074007ee
 *
 * @package default
 */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 *
 * @var yii\web\View $this
 * @var common\models\Application $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Application');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Applications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud application-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?php echo \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		<?php echo Yii::t('models', 'Application') ?>
		<small>
			<?php echo $model->id ?>
		</small>
	</h1>


	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='pull-left'>
			<?php echo Html::a(
	'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
	[ 'update', 'id' => $model->id],
	['class' => 'btn btn-info']) ?>

			<?php echo Html::a(
	'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
	['create', 'id' => $model->id, 'Application'=>$copyParams],
	['class' => 'btn btn-success']) ?>

			<?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
	['create'],
	['class' => 'btn btn-success']) ?>
		</div>

		<div class="pull-right">
			<?php echo Html::a('<span class="glyphicon glyphicon-list"></span> '
	. 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
		</div>

	</div>

	<hr />

	<?php $this->beginBlock('common\models\Application'); ?>


	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::attributeFormat
			[
				'format' => 'html',
				'attribute' => 'user_id',
				'value' => ($model->getUser()->one() ?
					Html::a('<i class="glyphicon glyphicon-list"></i>', ['profile/index']).' '.
					Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i> '.$model->getUser()->one()->name, ['profile/view', 'user_id' => $model->getUser()->one()->user_id, ]).' '.
					Html::a('<i class="glyphicon glyphicon-paperclip"></i>', ['create', 'Application'=>['user_id' => $model->user_id]])
					:
					'<span class="label label-warning">?</span>'),
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::attributeFormat
			[
				'format' => 'html',
				'attribute' => 'job_choice_1',
				'value' => ($model->getJobChoice1()->one() ?
					Html::a('<i class="glyphicon glyphicon-list"></i>', ['job/index']).' '.
					Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i> '.$model->getJobChoice1()->one()->name, ['job/view', 'id' => $model->getJobChoice1()->one()->id, ]).' '.
					Html::a('<i class="glyphicon glyphicon-paperclip"></i>', ['create', 'Application'=>['job_choice_1' => $model->job_choice_1]])
					:
					'<span class="label label-warning">?</span>'),
			],
			'year',
			'availableFromDate',
			'availableFromTime:datetime',
			'availableToDate',
			'availableToTime:datetime',
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::attributeFormat
			[
				'format' => 'html',
				'attribute' => 'job_choice_2',
				'value' => ($model->getJobChoice2()->one() ?
					Html::a('<i class="glyphicon glyphicon-list"></i>', ['job/index']).' '.
					Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i> '.$model->getJobChoice2()->one()->name, ['job/view', 'id' => $model->getJobChoice2()->one()->id, ]).' '.
					Html::a('<i class="glyphicon glyphicon-paperclip"></i>', ['create', 'Application'=>['job_choice_2' => $model->job_choice_2]])
					:
					'<span class="label label-warning">?</span>'),
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::attributeFormat
			[
				'format' => 'html',
				'attribute' => 'job_choice_3',
				'value' => ($model->getJobChoice3()->one() ?
					Html::a('<i class="glyphicon glyphicon-list"></i>', ['job/index']).' '.
					Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i> '.$model->getJobChoice3()->one()->name, ['job/view', 'id' => $model->getJobChoice3()->one()->id, ]).' '.
					Html::a('<i class="glyphicon glyphicon-paperclip"></i>', ['create', 'Application'=>['job_choice_3' => $model->job_choice_3]])
					:
					'<span class="label label-warning">?</span>'),
			],
			'bestTIme:datetime',
			'double',
			'accepted',
			'team_id',
			'rejected',
			'availabilityNotes:ntext',
			'otherNotes:ntext',
			'rejectedReason:ntext',
			'referee',
			'refereeRelationship',
			'refereePhone',
		],
	]); ?>


	<hr/>

	<?php echo Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
	[
		'class' => 'btn btn-danger',
		'data-confirm' => '' . 'Are you sure to delete this item?' . '',
		'data-method' => 'post',
	]); ?>
	<?php $this->endBlock(); ?>



	<?php echo Tabs::widget(
	[
		'id' => 'relation-tabs',
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => '<b class=""># '.$model->id.'</b>',
				'content' => $this->blocks['common\models\Application'],
				'active'  => true,
			],
		]
	]
);
?>
</div>
