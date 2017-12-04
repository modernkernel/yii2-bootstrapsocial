<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */


namespace powerkernel\bootstrapsocial;

use yii\helpers\Html;

/**
 * Class Button
 * @package powerkernel\bootstrapsocial*
 */
class Button extends Widget
{

    public $iconOnly = false;

    public $button = '';
    public $link = '';

    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->register();

        /* link */
        if(!empty($this->link)){
            $this->options = array_merge($this->options, ['href' => $this->link]);
        }



        $class = 'btn-block btn-social btn-' . $this->button;
        if ($this->iconOnly) {
            $class = 'btn-social-icon btn-' . $this->button;
        }
        if ($this->encodeLabel) {
            $this->label = Html::encode($this->label);
        }
        Html::addCssClass($this->options, 'btn ' . $class);

    }

    /**
     * Renders the widget.
     */
    public function run()
    {

        if(!empty($this->link)){
            $tag='a';
        }
        else {
            $tag='span';
        }
        echo Html::beginTag($tag, $this->options);
        echo Html::tag('i', '', ['class' => 'fa fa-' . $this->button]);
        echo $this->iconOnly ? '' : $this->label;
        echo Html::endTag($tag);

    }

} 
