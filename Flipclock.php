<?php
class Flipclock extends CComponent
{

    public static function register()
    {
        $assetsUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.flipclock.assets'));

        Yii::app()->clientScript
            ->registerCssFile($assetsUrl . '/flipclock.css')
            ->registerScriptFile($assetsUrl . '/flipclock.min.js');
    }

}
