<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25
 * Time: 13:45
 */

namespace app\seller\controller;


class Index extends Base
{

    public function index()
    {
        return $this->fetch();
    }
}