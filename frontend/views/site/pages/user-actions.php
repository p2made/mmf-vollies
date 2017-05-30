<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = 'User Actions';
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

	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
				<tr>
					<th>Action</th><th>Description</th>
				<tr>
					<td><?= Html::a('/user/registration/register', ['/user/registration/register']) ?></td>
					<td>Displays registration form</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/registration/resend', ['/user/registration/resend']) ?></td>
					<td>Displays resend form</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/registration/confirm', ['/user/registration/confirm']) ?></td>
					<td>Confirms a user (requires id and token query params)</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/security/login', ['/user/security/login']) ?></td>
					<td>Displays login form</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/security/logout', ['/user/security/logout']) ?></td>
					<td>Logs the user out (available only via POST method)</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/recovery/request', ['/user/recovery/request']) ?></td>
					<td>Displays recovery request form</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/recovery/reset', ['/user/recovery/reset']) ?></td>
					<td>Displays password reset form (requires id and token query params)</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/settings/profile', ['/user/settings/profile']) ?></td>
					<td>Displays profile settings form</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/settings/account', ['/user/settings/account']) ?></td>
					<td>Displays account settings form (email, username, password)</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/settings/networks', ['/user/settings/networks']) ?></td>
					<td>Displays social network accounts settings page</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/profile/show', ['/user/profile/show']) ?></td>
					<td>Displays user's profile (requires id query param)</td>
				</tr>
				<tr>
					<td><?= Html::a('/user/admin/index', ['/user/admin/index']) ?></td>
					<td>Displays user management interface</td>
				</tr>
				</tr>
			</table>
		</div>
	</div>

	<?= $this->render('../_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>


