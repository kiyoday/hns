<?php
namespace app\index\controller;
use think\Controller;

class Cart extends Controller
{	
     public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
    
    public function index()
    {
		$username=session('name');
		$userid=session('uid');
		if(!$username || !$userid){
			return redirect(url('user/login'));
		}else{
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
        ]);}
    }

    
}