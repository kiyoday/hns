<?php
namespace app\admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function logincheck()
    {   
    	if(request()->isPost()){
            $this->check(input('code'));
    		$data = input('post.');
    		$validate = validate('Admin');
        	if(!$validate->scene('add')->check($data)){
        		$this->error($validate->getError());
        	}
    		$admin=db('admin')->where('name','=',$data['name'])->find();
    		if(!$admin){
    			$this->error('用户不存在或密码错误');
    		}else{
    			if($admin['password']!=$data['password']){
    				$this->error('用户不存在或密码错误');
    			}else{
                    session('name', $data['name']);
    				$this->success('欢迎进入后台管理系统','index/index');
    			}
    		}
    	}	
    }

    //验证码检验
    public function check($code='')
    {
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
           return true;
        }
    }
}