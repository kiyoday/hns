<?php
namespace app\index\validate;
use think\Validate;

class Book extends Validate
{
	protected $rule = [
		['name','require','name必须传递'],
		['price','number','请输入正确的价格'],
	];

	protected $scene = [
		'add' => ['name','type','photo','introduce','price','uid'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
