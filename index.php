<?php
// +----------------------------------------------------------------
// | BG [ No News Is Good News ]
// +----------------------------------------------------------------
// | Copyright (c) 2015-2016 http://thinknet.cc All right reserved
// +----------------------------------------------------------------
// | Time : 2016/8/25 23:00
// +----------------------------------------------------------------
// | Author： 0x8c <zhangyuan@thinknet.cc>
// +----------------------------------------------------------------

/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

echo '<link rel="icon" href="//blog.0x8c.com/css/images/favicon.ico">';

define('TN',realpath('./'));
define('CORE',TN.'/core');
define('APP',TN.'/app');
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){

    $whoops = new \Whoops\Run;
    $errorTitle = 'TN Framework error!!!';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();

    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/function.php';

include CORE.'/thinknet.php';

spl_autoload_register('\core\thinknet::load');

\core\thinknet::run();


