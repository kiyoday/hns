<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
	protected $rule = [
		['name','require|max:5','name必须传递|name不能超过5个字符'],
	];

	//场景设置
	protected $scene = [
		'add' => ['name','password'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
