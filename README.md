#FlipClock

This is widget it wrapper of FlipClock https://github.com/objectivehtml/FlipClock

###Uses
Paste the following code in your view file:
~~~
[php]
$this->widget('ext.flipclock.FlipClockWidget', array(
    'selector' => '#clock', // ID for the future DIV
    'time' => 60, // Seconds
    'varName' => 'clock', // Name of variable for control FlipClock
    'options' => array(
        // options of FlipClock
    ),
));
~~~
