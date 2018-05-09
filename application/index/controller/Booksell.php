<?php
namespace app\index\controller;
use think\Controller;
class Booksell extends Controller
{
    public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
		$this->obju = model('user');
    }
    public function index()
    {	
    	$username=session('name');
        $userid=session('uid');
        if(!$username || !$userid){
            return redirect(url('user/login'));
        }else{
		$categorys = $this->objc->getcategory();
       // $books = $this->obj1->getbook();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
		$useremail=session('email');
		$userres=db('user')->where('email','=',$useremail)->select();//获取当前登陆的用户的信息
		//dump($userres);
		//dump($userres[0]['id']);die;
		$bookres=db('book')->where('uid','=',$userres[0]['id'])->order(['status'=>'desc'])->select();//获取当前登陆的用户卖的书的信息
        //$bookres=$this->obj1->getBookByser($userres[0]['id']);
        //dump($bookres);die;
		$bookres2 = array();
		$bookres2 = $bookres;
		foreach($bookres as $key => $link)  
    	{  
    		$bookres2[$key] = $link;
    		$bookres2[$key]['create_time'] = date("Y-m-d H:i:s",$link['create_time']);
    		//$link['create_time'] = date("Y-m-d H:i:s",$bookres['create_time']);

    	}
        return $this->fetch('',[
			'categorys'=>$categorys,
			'books'=>$bookres2,
		]);
    }
	}

	public function delivery($bid){
		$categorys = $this->objc->getcategory();
       // $books = $this->obj1->getbook();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
		$useremail=session('email');
		$sellerres=db('user')->where('email','=',$useremail)->select();//获取当前登陆的用户的信息   是卖家
		$sellerres1=$sellerres[0];
		//dump($userres);
		//dump($userres[0]['id']);die;
		$orderres=db('order')->where('bookid','=',$bid)->select();
		
		$buyerres=db('user')->where('id','=',$orderres[0]['buyerid'])->select();//获取这本书的买家
		$buyerres1=$buyerres[0];
		
		$bookres=db('book')->where('book_id','=',$bid)->select();//获取当前要发货的书的信息
		$bookres1=$bookres[0];
		//dump($bookres1);dump($sellerres1);dump($buyerres1);die;
        return $this->fetch('',[
			'categorys'=>$categorys,
			'book'=>$bookres1,
			'buyer'=>$buyerres1,
			'seller'=>$sellerres1,
		]);
	}
	public function save($bid){
	    $data=input('post.');
		//dump($data);dump($bid);die;
		$validate = validate('Order');
		//dump($validate->scene('add')->check($sdata));die;
        if(!$validate->scene('delivery')->check($data)){
            $this->error($validate->getError());
        }
		$res=db('order')->where('bookid',$bid)
			->update(['expnum'=>$data['expnum']]);
		$up1 = db('book')->where('book_id',$bid)->update(['status'=>2]);
		if($res){
			$this->redirect('booksell/index');
		}else{
			$this->error('发货失败');
		}
		
	}
}
    