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

use app\model\cModel;
use core\thinknet;

class indexCtrl extends thinknet
{
    public function index()
    {
        $title = 'this title';
        $data = 'hello world!!!';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index/index.html');
    }

    public function demo()
    {
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/index.html');
    }

    public function test()
    {
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/test.html');
    }
}
