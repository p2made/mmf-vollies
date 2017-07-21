<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel common\models\UpdateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Updates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<div class="update-index">

				<h1><?= Html::encode($this->title) ?></h1>
				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?= Html::a('Create Update', ['create'], ['class' => 'btn btn-success']) ?>
					<?= Html::a('Send Update', ['send'], ['class' => 'btn btn-success']) ?>
				</p>

					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => [
							['class' => 'yii\grid\SerialColumn'],

							'id',
							'name',
							'email:email',
							// 'other0',
							// 'other1',
							// 'other2',
							// 'status0',
							// 'status1',
							// 'status2',

							['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>
			</div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
