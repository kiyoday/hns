<?php
namespace app\index\controller;
use think\Controller;

class Order extends Controller
{	
     public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
        $this->objo = model('order');
    }
    
    public function index()
    {
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $uid = session('uid');
        $uorders = db('order')->alias('o')->join('user u','o.buyerid = u.id')->join('book b','o.bookid = b.book_id')->paginate(10);
        //dump($uorders);die;
        return $this->fetch('',[
            'categorys'=>$categorys,
            '$books'=>$books,
            'orders'=>$uorders,
        ]);
    }
}