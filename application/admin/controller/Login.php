<?php
namespace app\admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function logout()
    {
        session(null);
        $this->redirect('user/login');
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
    			if($admin['password']!=md5($data['password'])){
    				$this->error('用户不存在或密码错误');
    			}else{
                    session('aname', $data['name']);
                    session('type', $admin['type']);
    				$this->redirect('index/index');
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

    public function check_verify($code, $id = '')
    {
        $captcha = new \think\captcha\Captcha();
        $res = $captcha->check($code); 
        $this->ajaxReturn($res, 'json');
    }

}