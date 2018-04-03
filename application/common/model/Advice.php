<?php
namespace app\common\model;
use think\Model;

class Advice extends Model
{	
	protected $autoWriteTimestamp = true;
	protected $updateTime = false;

	public function add($data){
		$data['create_time'] = time();
		return $this->save($data);
	}

	public function addadvice($data){
		if(empty($data)|| !is_array($data)){
			return false;
		}
		return $this->save($data);
	}

	public function getadvice()
    {
        return $this->paginate(10);
    }
}