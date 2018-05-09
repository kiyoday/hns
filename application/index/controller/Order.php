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
		$this->obju = model('user');
    }
    
    public function index()
    {
		$username=session('name');
		$userid=session('uid');
		if(!$username || !$userid){
			return redirect(url('user/login'));
		}else{
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $uid = session('uid');
		$uorders = db('order')->alias('o')->join('user u','o.buyerid = u.id')->join('book b','o.bookid = b.book_id')->where(['buyerid'=>$uid])->order(['orderstatus'=>'asc'])->paginate(10);
        //dump($uorders);die;
        return $this->fetch('',[
            'categorys'=>$categorys,
            '$books'=>$books,
            'orders'=>$uorders,			
        ]);}
    }
	
	public function orderinfo($bid){
		$categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
		$name=session('name');
		$email=session('email');
		//dump($email);die;
		$user=$this->obju->getUserByEmail($email);
		//dump($user);die;
        $bres=db('book')->find($bid);
        $uid = $bres['uid'];//找到卖家id
        $ures=db('user')->find($uid);
        $this->assign('bid',$bres);
        $this->assign('uid',$ures);
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
			'user'=>$user,
        ]);
	}
    
	public function goodsConfirm($bid){
		db('book')->where('book_id',$bid)->update(['status'=>-1]);
		db('order')->where('bookid',$bid)->update(['orderstatus'=>2]);
		return redirect(url('order/index'));
	}

    public function sell()
    {
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        $uid = session('uid');
        $uorders = db('order')->alias('o')->join('user u','o.sellerid = u.id')->join('book b','o.bookid = b.book_id')->paginate(10);
        //dump($uorders);die;
        return $this->fetch('',[
            'categorys'=>$categorys,
            '$books'=>$books,
            'orders'=>$uorders,
        ]);
    }
}