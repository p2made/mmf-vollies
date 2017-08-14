<?php
/**
 * view.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model backend\models\Job */

?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">

		<?= DetailView::widget([
			'model' => $model,
			'panel' => [
				'heading' => 'Job Detail',
				//'headingOptions' => ['template' => '{title}'],
				'type' => 'primary',
			],
			'labelColOptions' => ['style' => 'width:15%', 'class' => 'text-right'],
			'attributes' => [
				[
					'columns' => [
						[
							'attribute' => 'name',
							'valueColOptions' => ['style' => 'width:35%'],
						],
						[
							'attribute' => 'shortName',
							'valueColOptions' => ['style' => 'width:35%'],
						],
					],
				],
				[
					'columns' => [
						[
							'label' => 'Work Area',
							'attribute' => 'teamName',
							'valueColOptions' => ['style' => 'width:35%'],
						],
						[
							'attribute' => 'required',
							'valueColOptions' => ['style' => 'width:35%'],
						],
					],
				],
				[
					'attribute' => 'description',
					'valueColOptions' => ['style' => 'width:85%'],
					'type' => DetailView::INPUT_TEXTAREA,
					'options' => ['rows' => 3],
					'vAlign' => 'top',
				],
			],
			'mode' => 'view',
		]) ?>

		<p>
			<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->id], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) ?>
		</p>

	</div>
</div>
