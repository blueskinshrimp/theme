<?php
namespace papayaer\web;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 */
class PapayaerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/creativetimofficial/now-ui-kit/assets';
    public $css = [
        'css/now-ui-kit.css',
    ];
    public $js = [
        'js/now-ui-kit.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
