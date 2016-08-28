<?php

/**
 * Created by PhpStorm.
 * User: 0x8C
 * Date: 2016/8/28
 * Time: 19:50
 */
namespace app\model;

use core\lib\model;

class cModel extends model
{
    public $table = 'c';

    public function lists()
    {
        return $this->select($this->table, '*');
    }

    public function getOne($id)
    {
        return $this->get($this->table, '*', array('id' => $id));
    }

    public function setOne($id, $data)
    {
        return $this->update($this->table, $data, array('id' => $id));
    }

    public function delOne($id)
    {
        return $this->delete($this->table, array('id' => $id));
    }
}
