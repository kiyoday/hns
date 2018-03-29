<?php
namespace app\admin\controller;
use think\Controller;

class Admin extends Controller
{
     public function _initialize()
    {
        $this->obj = model('admin');
    }

    public function index()
    {   
        $admins = $this->obj->getadmin();
        return $this->fetch('',[
            'admins'=>$admins,
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
            $editres=db('admin')->where('id',$tid)->update($data);
            if($editres)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        $type=db('admin')->find($tid);
        $this->assign('admin',$type);
        return $this->fetch();    
    }

    public function del($tid)
    {   
        if(request()->ispost())
        {   
            $data=input('post.');
            $delres=db('admin')->where('id',$tid)->delete();
            if($delres)
            {
                $this->success('删除成功');
            }
            else
            {
                $this->error('删除失败');
            }
        }
        $type=db('admin')->find($tid);
        $this->assign('admin',$type);
        return $this->fetch();
    }

    public function save()
    {
        //print_r(input('post.'));
        //print_r(request()->post());
        $data = input('post.');
        $validate = validate('admin');
        if(!$validate->scene('add')->check($data)){
        	$this->error($validate->getError());
        }
        //$data 提交给model层
        $res = $this->obj->add($data);
        if($res){
            $this->success('save成功');
        }
        else 
        {
            $this->error('save失败');
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
