<?php
namespace app\admin\validate;
use think\Validate;

class Category extends Validate
{
	protected $rule = [
		['type_name','require|max:10','分类名必须传递|分类名不能超过10个字符'],
	];

	//场景设置
	protected $scene = [
		'add' => ['type_name'],//添加
		'listorder' => ['id','listorder'],//排序
	];
}
