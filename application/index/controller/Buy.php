<?php
namespace app\index\controller;
use think\Controller;

class Buy extends Controller
{	
    public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
        $this->objo = model('order');
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
        $data=input('post.');
        $bres=db('book')->find($bid);
        $brres=session('uid');
        $srres=db('user')->find($bres['uid']);
        $data = [
            'buyername'=>$data['name'],
            'orderphone'=>$data['phone'],
            'orderaddress'=>$data['address'],
            'buyerid'=>$brres,
            'sellerid'=>$bres['uid'],
            'bookid'=>$bres['book_id'],
        ];
        $validate = validate('Order');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
        $res = $this->objo->add($data);
        if($res){
            $sessionclean = "shop_cart.$bid";
            session($sessionclean,null);
            $this->success('支付成功','cart/index',['$bid' => 0]);
        }
        else 
        {
            $this->error('支付失败');
        }
    }
}