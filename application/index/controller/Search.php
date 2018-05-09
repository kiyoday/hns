<?php
namespace app\index\controller;
use think\Controller;

class Search extends Controller
{
	 public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
	
    public function index()
    {   
		$data=input('get.');
		//dump($data);die;
		$sdata=$result=[];
		if(!empty($data['name'])){
			$sdata['name']=['like','%'.$data['name'].'%'];
		}
        $categorys = $this->objc->getcategory();
        $result= $this->obj1->getBookByConditionac($sdata);
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'result'=>$result,
			'name'=>$data['name'],
        ]);
    }

    
}
