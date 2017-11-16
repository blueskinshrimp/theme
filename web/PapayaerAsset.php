<?php
namespace shrimp\web;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 */
class PapayaerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/nowuikit2017/assets';
    public $css = [
        'css/now-ui-kit.css',
    ];
    public $js = [
        'js/now-ui-kit.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'shrimp\web\BootstrapAsset',
        'shrimp\web\BootstrapPluginAsset',
    ];
    
    // public function init()
    // {
    //     $postfix = YII_DEBUG ? '' : '.min';
    //     $this->css[] = 'bootstrap' . $postfix . '.css';

    //     parent::init();
    // }
}
