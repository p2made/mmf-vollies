<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
p2m\assets\TimelineAsset::register($this);
p2m\assets\MorrisAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2m\demo\assets\MorrisDemoData::register($this);

/* @var $this yii\web\View */

$this->title = 'Dashboard';
/* @var $form yii\bootstrap\ActiveForm */
?>
<div id="content-wrapper">

	<div class="row">
		<div class="col-md-3 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('comments fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">26</div>
							<div>New Comments!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('tasks fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">12</div>
							<div>New Tasks!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('shopping-cart fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">124</div>
							<div>New Orders!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('support fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">13</div>
							<div>Support Tickets!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div><!-- Example Panels -->
	<div class="row">
	</div>

</div><!-- /#content-wrapper -->
