<?php
/**
 * Created by PhpStorm.
 * User: 0x8C
 * Date: 2016/8/25
 * Time: 23:20
 */

namespace core\lib;


class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        // xxx.com/index/index
        /**
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对应的控制器和方法
         */
        $path = $_SERVER['REQUEST_URI'];
        if(isset($path) && $path !='/'){
            $patharr = explode('/',trim($path,'/'));
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
                unset($patharr[0]);
            }
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = 'index';
            }
            $count = count($patharr)+2;
            $i = 2;
            while ($i<$count){
                if(isset($patharr[$i+1])){
                    $_GET[$patharr[$i]] = $patharr[$i+1];
                }
                $i+=2;
            }
        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }

}