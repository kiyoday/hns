<?php
namespace app\common\model;
use think\Model;

class Order extends Model
{	
	protected $autoWriteTimestamp = false;
	protected $updateTime = false;

	public function add($data){
		$nowtime = time();
        $dtime = date("Y-m-d H:i:s", $nowtime);
        $data['ocreate_time'] = $dtime;
		return $this->save($data);
	}

	public function addadvice($data){
		if(empty($data)|| !is_array($data)){
			return false;
		}
		return $this->save($data);
	}

    public function getorder()
    {
        return $this->paginate(5);
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
        return $this->paginate(4);
    }

    public function searchgetbook()
    {
        return $this->paginate(4);
    }

    public function indexgetcategory()
    {
        return $this->paginate(8);
    }
}
