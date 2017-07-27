<?php
/**
 * user-entry.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */

p2m\sbAdmin\assets\SBAdmin2UserAsset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_html-header.php', []) ?>
</head>
<body>
<?php $this->beginBody() ?>

	<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
