<?php
namespace app\index\validate;
use think\Validate;

class Advice extends Validate
{
	protected $rule = [
		['name','require|max:5','name必须传递|name不能超过5个字符'],
		['email','email','请输入正确的邮箱格式'],
		['phone','number','请输入正确的手机格式'],

	];

	protected $scene = [
		'add' => ['email','name','phone','advicetext'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
