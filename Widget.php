<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */


namespace modernkernel\bootstrapsocial;

use modernkernel\fontawesome\FontawesomeAsset;


/**
 * Class Widget
 * @package modernkernel\bootstrapsocial
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
