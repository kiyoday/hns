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
	
	public function update1($bid){
		db('book')->where('book_id',$bid)->update(['status'=>2]);
		$sql=$this->getLastSql();
		dump($sql);die;
	}

	public function getBookByCondition($data=[])
    {
		$data['status']=0;//0表示未审核或者审核不通过的书籍
		$order=[
			'book_id'=>'desc',
		];
		//dump($data);die;
		
       $result=$this->where($data)
			->order($order)
			->select();
		//echo $this->getLastSql();exit();
		return $result;
    }
	
	public function getBookByConditionac($data=[])
    {
		$data['status']=1;//1表示审核通过的书
		$order=[
			'book_id'=>'desc',
		];
       $result=$this->where($data)
			->order($order)
			->select();
		return $result;
    }
	
	public function getBookByConditionad($data=[])
    {
		$data['status']=-1;//-1是完成订单的书
		$order=[
			'book_id'=>'desc',
		];
       $result=$this->where($data)
			->order($order)
			->select();
		return $result;
    }
	
	public function getBookByCategory($type)
    {
		$data['type']=$type;//-1是完成订单的书
		//dump($data);die;
		$order=[
			'book_id'=>'desc',
		];
       $result=$this->where($data)
			->order($order)
			->paginate(4);
		return $result;
    }
	
	public function getbook()
    {
		$data=[
		    'status'=>0,
		];
		$order=[
			
		];
		
       $result=$this->where($data)
			->order($order)
			->paginate(5);
		//echo $this->getLastSql();exit();
		
		return $result;
    }


    public function getBookByser($uid){
    	$data=[
		    'uid'=>$uid,
		];
		$order=[
			'status'=>'desc'
		];
		
       $result=$this->where($data)
			->order($order)
			->select();
        return $result;
    }
	
	public function getbook1()
    {
		$data=[
		    'status'=>1,
		];
		$order=[
			
		];
		
        return $this->where($data)
			->order($order)
			->paginate(5);
    }
	
	public function getbook2()
    {
		$data=[
		    'status'=>-1,
		];
		$order=[
			
		];
		
        return $this->where($data)
			->order($order)
			->paginate(5);
    }

    public function getcategory()
    {
        return $this->paginate(10);
    }

    public function indexgetbook()
    {
        $data['status']=1;//1表示审核通过的书
		$order=[
		];
       $result=$this->where($data)
			->order($order)
			->paginate(4);
		return $result;
    }

    public function searchgetbook()
    {
        return $this->paginate(4);
    }

    public function indexgetcategory()
    {
        return $this->paginate(8);
    }

    public function getbooksell()
    {
        return $this->paginate(8);
    }
}
