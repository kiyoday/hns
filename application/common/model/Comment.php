<?php
namespace app\common\model;

use think\Model;

class Comment extends Model
{	
	protected $autoWriteTimestamp = false;
	protected $updateTime = false;

	public function add($sdata){
		$sdata['addtime'] = time();
		return $this->save($sdata);
	}

	public function getCommentByBookId($bid)
    {
        $data=[
		    'book_id'=>$bid,
		];
		$order=[
			'id'=>'desc',
		];
		
        return $this->where($data)
			->order($order)
			->select();
    }
	
	
}