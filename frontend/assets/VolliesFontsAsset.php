<?php
/**
 * VolliesFontsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\VolliesFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'p2m\SB\assets\VolliesFontsAsset',
 */

namespace frontend\assets;

class VolliesFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic',
			],
			'js' => [],
		],

		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
