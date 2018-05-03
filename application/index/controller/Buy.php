<?php
namespace app\index\controller;
use think\Controller;

class Buy extends Controller
{	
    public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
    
    public function index($bid)
    {
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $bres=db('book')->find($bid);
        $uid = $bres['uid'];
        $ures=db('user')->find($uid);
        $this->assign('bid',$bres);
        $this->assign('uid',$ures);
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
        ]);
    }

    public function save($bid){
        dump(input('post.'));die;
    }
}