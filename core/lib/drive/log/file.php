<?php
// +----------------------------------------------------------------
// | BG [ No News Is Good News ]
// +----------------------------------------------------------------
// | Copyright (c) 2015-2016 http://thinknet.cc All right reserved
// +----------------------------------------------------------------
// | Time : 2016/8/28 17:42
// +----------------------------------------------------------------
// | Author： 0x8c <zhangyuan@thinknet.cc>
// +----------------------------------------------------------------

namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;//日志的存储位置

    public function __construct()
    {
        $conf = conf::get('OPTION', 'log');
        $this->path = $conf['path'];
    }

    public function log($message, $file = 'log')
    {
        /**
         * 1.确定文件的存储位置是否存在
         *   新建目录
         * 2.写入日志
         */
        $path = $this->path.date('Ymd');
        if (!is_dir($path)) {
            mkdir($path, '0777', true);
        }
        return file_put_contents($path .'/'. $file . '.log', date('Y-m-d H:i:s') . ' ' . json_encode($message) . PHP_EOL, FILE_APPEND);
    }
}