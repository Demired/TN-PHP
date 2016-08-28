<?php
// +----------------------------------------------------------------
// | BG [ No News Is Good News ]
// +----------------------------------------------------------------
// | Copyright (c) 2015-2016 http://thinknet.cc All right reserved
// +----------------------------------------------------------------
// | Time : 2016/8/26 0:25
// +----------------------------------------------------------------
// | Author： 0x8c <zhangyuan@thinknet.cc>
// +----------------------------------------------------------------
namespace core\lib;

class model extends \medoo{

    public function __construct()
    {
        $database = conf::all('db');
        parent::__construct($database);
    }
}