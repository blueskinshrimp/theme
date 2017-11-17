<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace shrimp\web;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jQuery](http://jquery.com/) JavaScript library.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JqueryAsset extends AssetBundle
{
    // public $sourcePath = '@bower/jquery/dist';
    public $sourcePath = '@vendor/nowuikit2017/assets';
    public $js = [
        'js/core/jquery.3.2.1.min.js',
    ];
}
