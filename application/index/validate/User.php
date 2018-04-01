<?php
namespace app\index\validate;
use think\Validate;

class User extends Validate
{
	protected $rule = [
		['name','require|max:5','name必须传递|name不能超过5个字符'],
		['email' => 'email','必须是正确的邮箱格式'],

	];

	protected $scene = [
		'add' => ['email','name','password'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
