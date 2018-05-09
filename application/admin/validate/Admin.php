<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
	protected $rule = [
		['name','require|min:2','名字不能是空|name不能少于2个字符'],
		['id','require','ID不能是空'],
		['password','require|min:2','密码不能是空|密码不能少于2和字符'],
	];

	//场景设置
	protected $scene = [
		'add' => ['name','password'],//添加
		'listorder' => ['id','listorder'],//排序
		'update' => ['name','password','id'],//添加
	];
}
