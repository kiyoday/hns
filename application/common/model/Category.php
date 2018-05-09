<?php
namespace app\common\model;

use think\Model;

class Category extends Model
{	
	protected $autoWriteTimestamp = true;
	protected $updateTime = false;

	public function add($data){
		$data['create_time'] = time();
		return $this->save($data);
	}

	public function getcategory()
    {
        return $this->paginate();
        //分页、显示10个
    }

}