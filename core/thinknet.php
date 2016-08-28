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
    public $assign;

    /**
     * 启动方法
     */
    public static function run()
    {
        lib\log::init();
        lib\log::log('test');
        $route = new lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
        $ctrlClassPath = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';
        if (is_file($ctrlFile)) {
            include "$ctrlFile";
            $ctrl = new $ctrlClassPath();
            $ctrl->$action();
            lib\log::log('ctrl:'.$ctrlClass.'    '.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    /**
     * 自动加载类
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = TN . '/' . $class . '.php';
            if (is_file($file)) {
                include "$file";
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    /**
     * 模板赋值
     * @param $name
     * @param $value
     */
    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    /**
     * 显示模板
     * @param $file
     * @throws \Exception
     */
    public function display($file)
    {
       $file = APP.'/views/'.$file;

        if(is_file($file)){
//            $this->assign;
            extract($this->assign);
            include "$file";
        }else{
            throw new \Exception('模板文件'.$file.'不存在');
        }
    }
}