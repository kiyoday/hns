<?php
namespace app\index\validate;
use think\Validate;

class Book extends Validate
{
	protected $rule = [
		['name','require|max:5','name必须传递|name不能超过5个字符'],
		['price','number','请输入正确的价格'],
	];

	protected $scene = [
		'add' => ['name','type','photo','introduce','price'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
