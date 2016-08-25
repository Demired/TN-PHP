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

class model extends \PDO{

    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $username = 'root';
        $password = '';
        try{
            parent::__construct($dsn,$username,$password);
        }catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}