<?php
namespace app\index\model;
/**
* user模型
*/
use think\model;
class User extends model
{
	protected function getNameAttr($name){
		return '名字是'.$name;
	}
	protected function setNameAttr($name){
		return '新的'.$name;
	}

	
}
?>