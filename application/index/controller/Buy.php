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
		$this->obju = model('user');

    }
    
    public function index($bid)
    {
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

    public function save($bid){
        $data=input('post.');
		//dump($data);
		//dump($bid);
        $bres=db('book')->find($bid);
		//dump($bres);
        $brres=session('uid');
		//dump($brres);die;
        $srres=db('user')->find($bres['uid']);
        $sdata = [
            'buyername'=>$data['name'],
            'orderphone'=>$data['phone'],
            'orderaddress'=>$data['address'],
            'buyerid'=>$brres,
            'sellerid'=>$bres['uid'],
            'bookid'=>$bres['book_id'],	
        ];
		//db('book')->where('id',$bid)->update(['status'=>2]);
		
		//$this->obj1->update1($bid);
		$up1 = db('book')->where('book_id',$bid)->update(['status'=>3]);
        //if(!$up1){$this->error('更新1出错');}
		//$result=db('order')->where('bookid','=',$bid)->select();
		//dump($result);die;
		//dump($sdata);
        $validate = validate('Order');
		//dump($validate->scene('add')->check($sdata));die;
        if(!$validate->scene('add')->check($sdata)){
            $this->error($validate->getError());
        }
        $res = $this->objo->add($sdata);
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