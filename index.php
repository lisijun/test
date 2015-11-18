<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.16.bca042/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//引入系统常量信息
$constant=dirname(__FILE__).'/protected/config/constant.php';
require_once($constant);


require_once($yii);
Yii::createWebApplication($config)->run();


