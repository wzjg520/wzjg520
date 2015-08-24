<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app_frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', ],	//log引入保证一直被加载,components是直到使用才会被加载
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'site/index',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//             'enableStrictParsing' => true,
//            'suffix' => '.html',
            'rules' => [
                 'posts' => 'site/index',             
                 // id 是命名参数，post/100 形式的URL，其实是 post/view&id=100
                 'post/<id:\d+>' => 'post/view',
                 
                 // controller action 和 id 以命名参数形式出现
                 '<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>' => '<controller>/<action>',
                 
                 '<controller:\w+>-<action:\w+>' => '<controller>/<action>',
                 '<module:\w>/<controller:\w>-<action:\w>' => '<module>/<controller>/<action>',
                 
                 
                 // 需要将 Web Server 配置成可以接收 *.digpage.com 域名的请求
                 'http://<user:\w+>.digpage.com/<lang:\w+>/profile' => 'user/profile',
             ]
        
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ]
    ],

    'modules' => [
        'admin' => [
            'class' => 'frontend\modules\admin\Admin',
            // ... 模块其他配置 ...
            'defaultRoute' => 'index/index',
            'controllerNamespace' => 'frontend\modules\admin\controllers',
            'layout' => 'admin'
        ],
        
    ],

	//'layout' => false,	//布局设置默认是layout下的main
	'layout' => 'ihuahua',
    'params' => $params,
	'language' => 'zh-cn',
];
