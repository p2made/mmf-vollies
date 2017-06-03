<?php
/**
 * VolliesAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\VolliesAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'p2m\SB\assets\VolliesAsset',
 */

namespace frontend\assets;

class VolliesAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@frontend/assets/lib',
			'css' => [
				'css/mmf-vollies.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'frontend\assets\VolliesFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
