<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace shrimp\web;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/nowuikit2017/assets';
    public $js = [
        'js/core/popper.min.js',
        'js/core/bootstrap.min.js',
        // 'js/plugins/bootstrap-switch.js',// Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/
        // 'js/plugins/nouislider.min.js',// Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/
        // 'js/plugins/bootstrap-datepicker.js',// Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker
    ];
    public $depends = [
        // 'yii\web\JqueryAsset',
        'shrimp\web\JqueryAsset',
        'shrimp\web\BootstrapAsset',
    ];
}
