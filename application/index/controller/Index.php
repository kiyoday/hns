<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
	 public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
	
    public function index()
    {
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);  
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
        ]);
    }

    public function addcart($bid){
        $bres=db('book')->find($bid);
        $shop_cart =session('shop_cart');
        $arr0 = array($bid => $bres);
        foreach ($arr0 as $key => $value) {  
            $shop_cart[$key] = $value;  
        } 
        session('shop_cart',$shop_cart);
        $this->success('已添加购物车', 'index/index'); 
    }

    public function cleancart(){
        session('shop_cart', null); 
        $this->success('已清空购物车', 'index/index'); 
    }

    public function delcart($bid){
        $sessionclean = "shop_cart.$bid";
        session($sessionclean,null);
        $this->success('已移出该商品', 'index/index'); 
    }  
}
