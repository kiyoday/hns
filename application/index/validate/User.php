<?php
namespace app\index\validate;
use think\Validate;

class User extends Validate
{
	protected $rule = [
		['name','require|chs','姓名必须填写必须|请填写真实姓名'],
		['email','email','必须是正确的邮箱格式'],
		['password','min:6','密码必须在6到16位之间'],
		['phone','min:10','手机号必须正确'],
	];

	protected $scene = [
		'add' => ['email','name','password'],//添加
		'update' => ['name','sex','phone','address'],//完善用户资料
		'listorder' => ['id','listorder'],//排序
	];
}


