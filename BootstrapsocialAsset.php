<?php
/** 
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com 
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace harrytang\bootstrapsocial;


use yii\web\AssetBundle;

class BootstrapsocialAsset extends AssetBundle {
    public $sourcePath = '@vendor/harrytang/yii2-bootstrapsocial/assets';
    public $css = [
        'bootstrap-social.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

} 