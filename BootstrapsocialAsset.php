<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2016 Power Kernel
 */

/**
 * @link http://lipis.github.io/bootstrap-social/
 */
namespace modernkernel\bootstrapsocial;


use yii\web\AssetBundle;

/**
 * Class BootstrapsocialAsset
 * @package modernkernel\bootstrapsocial
 */
class BootstrapsocialAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-social';
    public $css = [
        'bootstrap-social.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

} 
