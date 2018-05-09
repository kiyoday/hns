<?php
namespace app\admin\validate;
use think\Validate;

class Category extends Validate
{
	protected $rule = [
		['type_name','require|max:10','分类名必须填写|分类名不能超过10个字符'],
		['book_id','number'],
		['status','number|in:-1,0,1,2','状态必须是数字|状态范围不合法']
		
	];

	//场景设置
	protected $scene = [
		'add' => ['type_name'],//添加
		'listorder' => ['id','listorder'],//排序
		'status' =>['book_id','status'],
	];
}
