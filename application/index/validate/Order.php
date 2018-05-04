<?php
namespace app\index\validate;
use think\Validate;

class Order extends Validate
{
	protected $rule = [
		['name','require|max:5','name必须传递|请输入正确的姓名'],
		['orderphone','number|min:8','请输入正确的手机号以确保可以收货|请输入正确的手机号以确保可以收货'],
		['orderaddress','require','请输入正确的地址以确保可以收货'],
	];

	protected $scene = [
		'add' => ['buyername','orderphone','orderaddress','buyerid','sellerid','bookid'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
