<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApplicationJob */

$this->title = 'Create Application Job';
$this->params['breadcrumbs'][] = ['label' => 'Application Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-job-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
