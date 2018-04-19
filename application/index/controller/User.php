<?php
namespace app\index\controller;
use think\Controller;

class User extends Controller
{   
    public function _initialize()
    {
        $this->obj = model('User');
        $this->objc = model('category');
        $this->obj1 = model('book');
    }

    public function login()
    {   
        $users = $this->obj->getuser();
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        return $this->fetch('',[
            'users'=>$users,
            'categorys'=>$categorys,
            'books'=>$books,
            ]); 
    }  

    public function index()
    {   
        $users = $this->obj->getuser();
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        return $this->fetch('',[
            'users'=>$users,
            'categorys'=>$categorys,
            'books'=>$books,
            ]);
    }

    public function logincheck()
    {   
        if(request()->isPost()){
            $this->check(input('code'));
            $data = input('post.');
            if(request()->ispost())
            {
            $userl=db('User')->where('email','=',$data['email'])->find();
            }
            if(!$userl){
                $this->error('帐号或密码错误');
            }else{
                if($userl['password']!=$data['password']){
                    $this->error('帐号或密码错误');
                }else{
                    session('name', $userl['name']);
                    $this->redirect('index/index');
                }
            }
        }
    }

    public function register()
    {   
        $users = $this->obj->getuser();
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        return $this->fetch('',[
            'users'=>$users,
            'categorys'=>$categorys,
            'books'=>$books,
            ]); 
    }
    
    public function add()
    {
        return $this->fetch();
    }


    public function edit($tid)
    {
        if(request()->ispost())
        {
            $data=input('post.');
            $editres=db('user')->where('id',$tid)->update($data);
            if($editres)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        $type=db('user')->find($tid);
        $this->assign('user',$type);
        return $this->fetch();    
    }

    public function del($tid)
    {   
        if(request()->ispost())
        {   
            $data=input('post.');
            $delres=db('user')->where('id',$tid)->delete();
            if($delres)
            {
                $this->success('删除成功');
            }
            else
            {
                $this->error('删除失败');
            }
        }
        $usern=db('user')->find($tid);
        $this->assign('user',$usern);
        return $this->fetch();
    }

    public function save()
    {
        //dump(input('password'));die;
        //print_r(input('post.'));
        //print_r(request()->post());
        $data = input('post.');
        $validate = validate('user');
        $emailck=db('user')->where('email','=',$data['email'])->select();
        if($emailck){
            $this->error('邮箱已被注册');
        }
        if ($data['password']!=$data['lastpwd']) {
            $this->error('输入的密码必须一致');
        }
        if(!$validate->scene('add')->check($data)){
        	$this->error($validate->getError());
        }
        $result1=$validate->scene('add')->check($data);
        $data1=[
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
        ];
        //$data 提交给model层
        $res = $this->obj->add($data1);
        if($res){
            $this->success('注册成功','user/login');
        }
        else 
        {
            $this->error('注册失败');
        }
        return $this->fetch('index');
    }

    public function update($data) {
        $res =  $this->obj->save($data, ['id' => intval($data['id'])]);
        if($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
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
