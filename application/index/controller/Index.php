<?php
namespace app\index\controller;
use app\index\model\User;

class Index 
{
    public function index()
    {
       $use = User::get(6);
       $use->name = '姚惠铭';
       echo $use->name;

    }
    public function hello()
    {
    	return 'daasda';
    }
    public function test()
    {
        $use = new User;
        $list = [
        ['name'=>'jym','age'=>'11'],
        ['name'=>'yhm','age'=>'100'],
        ];
        $use->saveAll($list);
    }
    public function query()
    {
        $use = User::getById(5);
        echo $use['name'];
        echo $use -> age;


    }

   
}