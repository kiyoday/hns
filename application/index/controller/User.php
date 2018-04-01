<?php
namespace app\index\controller;
use think\Controller;

class User extends Controller
{
     public function _initialize()
    {
        $this->obj = model('User');
    }

    public function index()
    {   
        $users = $this->obj->getuser();
        return $this->fetch('',[
            'users'=>$users,
            ]);
    }

    public function register()
    {   
        return $this->fetch(); 
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
            $editres=db('user')->where('type_id',$tid)->update($data);
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
            $delres=db('user')->where('type_id',$tid)->delete();
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
        //print_r(input('post.'));
        //print_r(request()->post());
        $data = input('post.');
        $validate = validate('user');
        if (!password==lastpwd) {
             $this->error('输入的密码必须一致');
        }
        if(!$validate->scene('add')->check($data)){
        	$this->error($validate->getError());
        }

        //$data 提交给model层
        $res = $this->obj->add($data);
        if($res){
            $this->success('添加成功');
        }
        else 
        {
            $this->error('添加失败');
        }
    }

    public function update($data) {
        $res =  $this->obj->save($data, ['id' => intval($data['id'])]);
        if($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    

}
