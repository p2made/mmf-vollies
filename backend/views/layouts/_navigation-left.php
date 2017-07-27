<?php
/**
 * navigation-left.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

use p2m\widgets\MetisNav;
use p2m\helpers\FA;

$arrowIcon = FA::i('arrow')->tag('span');
?>
<section class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<?= Html::a(FA::fw('dashboard') . ' Dashboard', Yii::$app->homeUrl) ?>
			</li><!-- Dashboard -->
			<li>
				<?= Html::a(FA::fw('group') . 'Vollies', Url::to(['/profile/index'])) ?>
			</li><!-- Profiles -->
			<li>
				<?= Html::a(FA::fw('group') . 'Applications', Url::to(['/application/index'])) ?>
			</li><!-- Applications -->
			<li>
				<?= Html::a(FA::fw('group') . 'Work Areas', Url::to(['/team/index'])) ?>
			</li><!-- Teams -->
			<li>
				<?= Html::a(FA::fw('group') . 'Jobs', Url::to(['/job/index'])) ?>
			</li><!-- Jobs -->
			<li>
				<?= Html::a(FA::fw('group') . 'Commitments', Url::to(['/commitment/index'])) ?>
			</li><!-- Commitments -->
			<li>
				<?= Html::a(FA::fw('group') . 'Users', Url::to(['/user/admin/index'])) ?>
			</li><!-- Users -->
			<li>
				<?= Html::a(FA::fw('table') . 'Tables', Url::to(['/site/page', 'view' => 'tables'])) ?>
			</li><!-- Tables -->
			<!--<li>
				<?= Html::a(FA::fw('group') . 'Histories', Url::to(['/history/index'])) ?>
			</li>--><!-- Histories -->

			<li>
				<a href="#"><?= FA::fw('coffee') ?> Developer<?= $arrowIcon ?></a>
				<?= MetisNav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => '<span class="fa fa-file-code-o fa-fw"></span> Gii', 'url' => ['/gii']],
						['label' => '<span class="fa fa-dashboard fa-fw"></span> Debug', 'url' => ['/debug']],
					],
				]) ?>
			</li><!-- Developer -->
		</ul>
	</div>
</section>

<!--
-->
