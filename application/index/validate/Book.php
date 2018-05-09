<?php
namespace app\index\validate;
use think\Validate;

class Book extends Validate
{
	protected $rule = [
		['name','require','请填写书名信息'],
		['type','require','请填写书籍类型信息'],
		['photo','require','请上传图书照片'],
		['price','number','请输入正确的价格'],
	];

	protected $scene = [
		'add' => ['name','type','photo','introduce','price','uid'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
