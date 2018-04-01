<?php
namespace app\common\model;

use think\Model;

class User extends Model
{	
	protected $autoWriteTimestamp = true;
	protected $updateTime = false;

	public function add($data){
		$data['create_time'] = time();
		return $this->save($data);
	}

	public function getuser()
    {
        return $this->paginate(10);
    }
}