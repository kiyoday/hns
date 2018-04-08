<?php
namespace app\common\model;
use think\Model;

class Book extends Model
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

	public function getbook()
    {
        return $this->paginate(5);
    }

    public function getcategory()
    {
        return $this->paginate(10);
    }

    public function indexgetbook()
    {
        return $this->paginate(12);
    }

    public function indexgetcategory()
    {
        return $this->paginate(8);
    }
}
