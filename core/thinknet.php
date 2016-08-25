<?php
/**
 * Created by PhpStorm.
 * User: 0x8C
 * Date: 2016/8/25
 * Time: 23:15
 */

namespace core;

/**
 * Class thinknet
 * @package core
 */
class thinknet
{

    public static $classMap = array();

    /**
     * 启动方法
     */
    public static function run()
    {
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlFile)){
            include "$ctrlFile";
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        }
    }

    /**
     * 自动加载类
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = TN.'/'.$class.'.php';
            if(is_file($file)){
                include "$file";
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

}