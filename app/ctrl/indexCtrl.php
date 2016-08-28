<?php
// +----------------------------------------------------------------
// | BG [ No News Is Good News ]
// +----------------------------------------------------------------
// | Copyright (c) 2015-2016 http://thinknet.cc All right reserved
// +----------------------------------------------------------------
// | Time : 2016/8/26 0:02
// +----------------------------------------------------------------
// | Author： 0x8c <zhangyuan@thinknet.cc>
// +----------------------------------------------------------------

namespace app\ctrl;

use core\lib\route;

class indexCtrl extends \core\thinknet
{
    public function index()
    {
        P('it is index');
        $model = new \core\lib\model();
        $sql = 'select * from c';
        $ret = $model->query($sql);
        p($ret->fetchAll());
    }

    public function demo()
    {
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/index.html');
    }

    public function test(){
        $temp1 = \core\lib\conf::get('CTRL','route');
        $temp2 = \core\lib\conf::get('ACTION','route');
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/index.html');
    }
}
