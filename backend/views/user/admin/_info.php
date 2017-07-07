<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $user
 */
?>

<?php $this->beginContent('@dektrium/user/views/admin/update.php', ['user' => $user]) ?>

<table class="table">
	<tr>
		<td><strong><?= Yii::t('user', 'Registration time') ?>:</strong></td>
		<td><?= Yii::$app->formatter->asDate($user->created_at, 'yyyy-MM-dd HH:mm') ?></td>
	</tr>
	<?php if ($user->registration_ip !== null): ?>
		<tr>
			<td><strong><?= Yii::t('user', 'Registration IP') ?>:</strong></td>
			<td><?= $user->registration_ip ?></td>
		</tr>
	<?php endif ?>
	<tr>
		<td><strong><?= Yii::t('user', 'Confirmation status') ?>:</strong></td>
		<?php if ($user->isConfirmed): ?>
			<td class="text-success">
				<?= Yii::$app->formatter->asDate($user->confirmed_at, 'yyyy-MM-dd HH:mm') ?>
			</td>
		<?php else: ?>
			<td class="text-danger"><?= Yii::t('user', 'Unconfirmed') ?></td>
		<?php endif ?>
	</tr>
	<tr>
		<td><strong><?= Yii::t('user', 'Block status') ?>:</strong></td>
		<?php if ($user->isBlocked): ?>
			<td class="text-danger">
				<?= Yii::$app->formatter->asDate($user->blocked_at, 'yyyy-MM-dd HH:mm') ?>
			</td>
		<?php else: ?>
			<td class="text-success"><?= Yii::t('user', 'Not blocked') ?></td>
		<?php endif ?>
	</tr>
</table>

<?php $this->endContent() ?>
