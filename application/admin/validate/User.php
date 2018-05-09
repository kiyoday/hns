<?php
namespace app\admin\validate;
use think\Validate;

class User extends Validate
{
	protected $rule = [
		['name','require|max:50','分类名必须传递|分类名不能超过50个字符'],
		['id','number'],
		['status','number|in:0,1','状态必须是数字|状态范围不合法']
	];

	//场景设置
	protected $scene = [
		'add' => ['name'],//添加
		'status' =>['id','status'],
	];
}
