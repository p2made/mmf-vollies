<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/fcd70a9bfdf8de75128d795dfc948a74
 *
 * @package default
 */


use yii\helpers\Html;

/**
 *
 * @var yii\web\View $this
 * @var common\models\Application $model
 */
$this->title = Yii::t('models', 'Application') . " " . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Application'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud application-update">

	<h1>
		<?php echo Yii::t('models', 'Application') ?>
		<small>
						<?php echo $model->id ?>
		</small>
	</h1>

	<div class="crud-navigation">
		<?php echo Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
	</div>

	<hr />

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
