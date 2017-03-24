<?php
/**
 * /WWW/yii.mmf-vollies/backend/runtime/giiant/fccccf4deb34aed738291a9c38e87215
 *
 * @package default
 */


use yii\helpers\Html;

/**
 *
 * @var yii\web\View $this
 * @var common\models\Job $model
 */
$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Jobs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud job-create">

    <h1>
        <?php echo Yii::t('models', 'Job') ?>
        <small>
                        <?php echo $model->name ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?php echo             Html::a(
	'Cancel',
	\yii\helpers\Url::previous(),
	['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
