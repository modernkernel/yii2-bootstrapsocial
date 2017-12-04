<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */


namespace powerkernel\bootstrapsocial;

use powerkernel\fontawesome\FontawesomeAsset;


/**
 * Class Widget
 * @package powerkernel\bootstrapsocial
 */
class Widget extends \yii\base\Widget
{
    public $options = [];

    public function init()
    {
        parent::init();
        $this->register();
    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        FontawesomeAsset::register($view);
        BootstrapsocialAsset::register($view);
    }
}
