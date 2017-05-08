<?php
/**
 * confirm.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

/**
 * @var yii\web\View $this
 * @var bool $success
 * @var string $email
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = Yii::t('user', $success ? 'Confirmed' : 'Error');
//$this->title = 'Blank';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<?php if ($success): ?>

		<div class="alert alert-success">

			<p><?= Yii::t("user", "Your email [ {email} ] has been confirmed", ["email" => $email]) ?></p>

			<?php if (Yii::$app->user->isLoggedIn): ?>

				<p><?= Html::a(Yii::t("user", "Go to my account"), ["/user/account"]) ?></p>
				<p><?= Html::a(Yii::t("user", "Go home"), Yii::$app->getHomeUrl()) ?></p>

			<?php else: ?>

				<p><?= Html::a(Yii::t("user", "Log in here"), ["/user/login"]) ?></p>

			<?php endif; ?>

		</div>

	<?php elseif ($email): ?>

		<div class="alert alert-danger">[ <?= $email ?> ] <?= Yii::t("user", "Email is already active") ?></div>

	<?php else: ?>

		<div class="alert alert-danger"><?= Yii::t("user", "Invalid token") ?></div>

	<?php endif; ?>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
