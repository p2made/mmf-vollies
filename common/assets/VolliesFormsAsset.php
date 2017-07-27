<?php
/**
 * VolliesFormsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * common\assets\VolliesFormsAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'common\assets\VolliesAsset',
 */

namespace common\assets;

class VolliesFormsAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@common/assets/lib',
			'css' => [
				'css/forms.css',
			],
		],

		'depends' => [
			'frontend\assets\VolliesAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
