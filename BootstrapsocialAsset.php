<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

/**
 * @link http://lipis.github.io/bootstrap-social/
 */
namespace powerkernel\bootstrapsocial;


use yii\web\AssetBundle;

/**
 * Class BootstrapsocialAsset
 * @package powerkernel\bootstrapsocial
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
