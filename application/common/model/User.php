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
        $data=[
		    
		];
		$order=[
			'id'=>'desc',
		];
		
        return $this->where($data)
			->order($order)
			->paginate(5);
    }
	public function getUserByEmail($email){
		$data['email']=$email;
		//dump($data);die;
		$order=[
		     
		];
       $result=$this->where($data)
			->order($order)
			->select();
		//$sql=$this->getLastSql();
		//print_r($sql);die;
		return $result;
	}
}