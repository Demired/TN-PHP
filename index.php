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

if(DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

include CORE.'/common/function.php';

include CORE.'/thinknet.php';

spl_autoload_register('\core\thinknet::load');

\core\thinknet::run();


