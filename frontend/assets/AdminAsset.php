<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Jiajun Wang <wzjg520@126.com>
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    	'css/admin/base.css'
    ];
    public $js = [
    	'js/app.js',
    ];
    
    public $depends = [
       'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];
    
    public static  function registerStaticJs($view, $jsfile){
    	$view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);  
    }
    
    public static  function registerStaticCss($view, $cssfile){
    	$view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
    }
    
}
