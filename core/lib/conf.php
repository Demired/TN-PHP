<?php
/**
 * Created by PhpStorm.
 * User: 0x8C
 * Date: 2016/8/28
 * Time: 16:21
 */

namespace core\lib;

/**
 * 加载配置文件
 * Class conf
 * @package core\lib
 */
class conf
{

    static public $conf = array();

    /**
     * @param $name
     * @param $file
     * @return mixed
     * @throws \Exception
     */
    static public function get($name, $file)
    {
        /**
         * 1.判断文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        } else {
            $path = TN . '\\core\config\\' . $file . '.php';
            if (is_file($path)) {
                $conf = include "$path";
                if (isset($conf[$name])) {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception('没有这个配置项' . $name);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }

    /**
     * 批量加载配置文件
     * @param $file
     * @return mixed
     * @throws \Exception
     */
    public static function all($file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $path = TN . '/core/config/' . $file . '.php';
            if (is_file($path)) {
                $conf = include "$path";
                self::$conf[$file] = $conf;
                return $conf;
            } else {
                throw new \Exception('找不到配置文件', $path);
            }
        }
    }
}