<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public static $staticDepends = [
       'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
	   'frontend\assets\AppAsset',
	   'yii\bootstrap\BootstrapThemeAsset',
       'yii\bootstrap\BootstrapPluginAsset'
    ];
    
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/base.css'
    ];
    public $js = [
        'js/app.js',
        'js/base.js'
                    
    ];
    
    public $depends = [
       'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
       'yii\bootstrap\BootstrapPluginAsset'
    ];
    
    
    public static  function registerStaticJs($view, $jsfile){
    	$view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);  
    }
    
    public static  function registerStaticCss($view, $cssfile){
    	$view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
    }
    
}
