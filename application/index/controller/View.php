<?php
namespace app\index\controller;
use think\Controller;

class View extends Controller
{
	public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
        $this->objco = model('comment');
        $this->obju = model('user');
    }
	
    public function index($bid)
    {
        $categorys = $this->objc->getcategory();
        $comment = db('comment')->alias('c')
            ->join('user u','c.uid = u.id')
            ->where(['book_id'=>$bid])->paginate();
        $comment2 = array();
        foreach($comment as $key => $link)  
        {  
            $comment2[$key] = $link;
            $comment2[$key]['addtime'] = date("Y-m-d H:i:s", $link['addtime']);
        }
        $books = $this->obj1->indexgetbook();
        $bres=db('book')->find($bid);
        $bres2 = array();
        foreach($bres as $key => $value)  
        {  
            $bres2[$key] = $value;

            $bres2['create_time'] = date("Y-m-d H:i:s", $bres['create_time']);
        }
        $ures=db('user')->find($bres['uid']);
        $this->assign('bid',$bres2);
        $this->assign('uid',$ures);
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
            'comment'=>$comment2,
        ]);
    }

    public function savecomment($bid){
        $data=input('get.');//获得评论的文本
        //dump($data);die;
        $validate = validate('comment');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
        
        
        $email=session('email');//获取当前登陆的用户的email
        $userres=$this->obju->getUserByEmail($email);//获取当前登陆用户的信息
        //dump($userres[0]['id']);die;//这个是当前登陆用户id
        $sdata=[
            'book_id'=>$bid,
            'uid'=>$userres[0]['id'],
            'text'=>$data['text'],
        ];
        //dump($sdata);die;
        $res=$this->objco->add($sdata);
        if($res){
            $this->success('评论成功');
        }else{
            $this->error('评论失败');
        }
    }
}
