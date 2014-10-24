<?php
/**
 * Class file FlipclockWidget.
 * 
 * @author Vasilij "BuPy7" Belosludcev http://mihaly4.ru
 * @package flipclock
 */

Yii::import('ext.flipclock.Flipclock');

/**
 * Wrapper for FlipClock widget.
 * 
 * Official site: http://flipclockjs.com/
 * GitHub repository: https://github.com/objectivehtml/FlipClock
 * 
 * @author Vasilij "BuPy7" Belosludcev http://mihaly4.ru
 * @version 0.1.0
 */
class FlipclockWidget extends CWidget
{
    /**
     * @var array Options of Flipclock.
     */
    public $options = array();
    
    /**
     * @var string Selector for flipclock. If is null, then will be use ID of widget.
     */
    public $selector;
    
    /**
     * @var int Time in seconds for timer.
     */
    public $time;
    
    /**
     * @var string Name of var for control Flipclock.
     */
    public $varName;
    
    public function init()
    {
        Flipclock::register();
        
        if ($this->selector === null)
        {
            $this->selector = '#' . $this->id;
        }
        if ($this->varName === null)
        {
            $this->varName = $this->id;
        }
        
        Yii::app()->clientScript->registerScript(
            'flip-clock-' . $this->id, 
            "var {$this->varName} = new FlipClock($(" . CJavaScript::encode($this->selector) . "), " . CJavaScript::encode($this->time) . ", " . CJavaScript::encode($this->options) . ");", 
            CClientScript::POS_END
        );
    }
    
    public function run()
    {
        if (strpos($this->selector, '.') === 0)
        {
            echo CHtml::tag('div', array('class' => substr($this->selector, 1, strlen($this->selector))));
        }
        else
        {
            echo CHtml::tag('div', array('id' => substr($this->selector, 1, strlen($this->selector))));
        }
        echo CHtml::closeTag('div');
    }
    
}
