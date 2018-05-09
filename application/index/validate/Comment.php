<?php
namespace app\index\validate;
use think\Validate;

class Comment extends Validate
{
	protected $rule = [
		['text','require','不要提交空评论哦'],
	];

	protected $scene = [
		'add' => ['text'],//添加
	];
}