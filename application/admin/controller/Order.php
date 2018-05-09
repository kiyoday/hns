<?php
namespace app\admin\controller;
use think\Controller;

class Order extends Controller
{
	 public function _initialize()
    {
        $this->obj = model('order');
    }

     public function index(){ 
		$data=input('get.');
		//dump($data);die;
		$sdata=$result=[];
		/*if(!empty($data['datemin']) && !empty($data['datemax']) && date_timestamp_get(strtotime($data['datemax'])) > date_timestamp_get(strtotime($data['datemin'])) ){
			$sdata['ordertime']=[
				['gt',date_timestamp_get(strtotime($data['datemax']))],
				['lt',date_timestamp_get(strtotime($data['datemin']))],
			];
		}*/
		if(!empty($data['buyername'])){
			$sdata['buyername']=['like','%'.$data['buyername'].'%'];
		}
		 if(!empty($data['buyerid'])){
			$sdata['buyerid']=['like','%'.$data['buyerid'].'%'];
		}
		 if(!empty($data['sellerid'])){
			$sdata['sellerid']=['like','%'.$data['sellerid'].'%'];
		}
		//dump($sdata);die;
        $result = $this->obj->getOrderByCondition($sdata);
        //dump($result);die;
        return $this->fetch('',[

			'result'=>$result,
			'datemin'=>empty($data['datemin'])? '' : $data['datemin'],
			'datemax'=>empty($data['datemax'])? '' : $data['datemax'],
			'buyername'=>empty($data['buyername'])? '' : $data['buyername'],
			'buyerid'=>empty($data['buyerid'])? '' : $data['buyerid'],
			'sellerid'=>empty($data['sellerid'])? '' : $data['sellerid'],
        ]);
    }
}
