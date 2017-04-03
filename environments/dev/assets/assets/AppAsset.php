<?php
/**
 * AppAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * assets\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'assets\assets\AppAsset',
 */

namespace assets\assets;

class AppAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@assets/assets/lib',
			'js' => [
			],
		],

		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
