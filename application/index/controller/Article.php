<?php
/**
 * Created by PhpStorm.
 * User: yaohuiming
 * Date: 2017/4/14
 * Time: 下午3:58
 */
namespace app\index\controller;
class Article extends \think\controller
{
    public function remark()
    {
        return 'hello remark';

    }


    public function index()
    {
        return $this->fetch('index2');
    }
}