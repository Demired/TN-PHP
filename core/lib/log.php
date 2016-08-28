<?php
/**
 * Created by PhpStorm.
 * User: 0x8C
 * Date: 2016/8/28
 * Time: 17:36
 */

namespace core\lib;

use \core\lib\conf;
class log
{
    static $class;
    /**
     * 1.确定日志的存储方式
     * 2.写日志
     */
    static public function init()
    {
        //确定存储方式
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\' . $drive;
        self::$class = new $class;
    }
    static public function log($name,$file='log'){
        self::$class->log($name,$file);
    }
}