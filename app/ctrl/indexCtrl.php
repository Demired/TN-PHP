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

class indexCtrl
{
    public function index()
    {
        P('it is index');
        $model = new \core\lib\model();
        $sql = 'select * from c';
        $ret = $model->query($sql);
        p($ret->fetchAll());
    }
}
