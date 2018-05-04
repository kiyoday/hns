<?php
namespace app\index\controller;
use think\Controller;

class Center extends Controller
{	
	public function _initialize()
    {
        $this->obj = model('Advice');
        $this->objc = model('category');
    }

    public function add()
    {
        return $this->fetch();
    }

    public function index()
    {
        $categorys = $this->objc->getcategory();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        $uid = session('uid'); 
        $users = db('user')->where('id',$uid)->find();
        return $this->fetch('',[
            'user'=> $users ,
            'categorys'=>$categorys,
        ]);
    }

    public function save()
    {
    	$data = input('post.');
    	$validate = validate('User');
        if(!$validate->scene('update')->check($data)){
        	$this->error($validate->getError());
        }
        $uid=session('uid');
        $editres=db('user')->where('id',$uid)->update($data);
        if($editres){
            $this->success('修改成功','center/index');
        }
        else 
        {
            $this->error('提交失败');
        }
    }
}
