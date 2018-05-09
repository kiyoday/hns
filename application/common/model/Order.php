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
        $data['orderstatus'] = 1;
		return $this->save($data);
	}

	public function addadvice($data){
		if(empty($data)|| !is_array($data)){
			return false;
		}
		return $this->save($data);
	}


	public function getOrderByCondition($data=[])
    {
		$datas=[];
		$datas=$data;
		
		$order=[
			'order_id'=>'desc',
		];
		//dump($data);die;
		
       $result=$this->where($datas)
			->order($order)
			->select();
		return $result;
        
		/*$data=[
		    
		];
		$order=[
			'order_id'=>'desc',
		];
		
        return $this->where($data)
			->order($order)
			->paginate(5);*/
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
