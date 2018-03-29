<?php
namespace app\common\model;
use think\Model;

class Admin extends Model
{	
	protected $autoWriteTimestamp = true;
	protected $updateTime = false;

	public function add($data){
		$data['create_time'] = time();
		return $this->save($data);
	}

	public function addadmin($data){
		if(empty($data)|| !is_array($data)){
			return false;
		}
		if($data['password']){
			$data['password']=md5($data['password']);
		}
		return $this->save($data);
	}
}