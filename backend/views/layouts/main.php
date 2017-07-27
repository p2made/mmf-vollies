<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

/* @var $this \yii\web\View */
/* @var $content string */

$layout = 'primary';

if (Yii::$app->controller->action->id === 'login') {
	$layout = 'user-entry';
}
if (Yii::$app->controller->action->id === 'signup') {
	$layout = 'user-entry';
}

echo $this->render(
	$layout, ['content' => $content]
);
