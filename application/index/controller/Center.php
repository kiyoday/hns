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
        return $this->fetch('',[
            'categorys'=>$categorys,
        ]);
    }

    public function save()
    {
    	$data = input('post.');
    	$validate = validate('Advice');
        if(!$validate->scene('add')->check($data)){
        	$this->error($validate->getError());
        }
        $res = $this->obj->add($data);
        if($res){
            $this->success('提交成功','index/index');
        }
        else 
        {
            $this->error('提交失败');
        }

    }
}
