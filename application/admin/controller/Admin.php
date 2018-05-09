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


    public function edit($id)
    {
		
		if(request()->ispost())
        {
            $data=input('post.');
            $editres=db('admin')->where('id',$id)->update($data);
            if($editres)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        $type=db('admin')->find($id);
		//print_R($type);exit;
        $this->assign('admin',$type);
        return $this->fetch();
    }
        /*$result=db('Admin')->where('id','=',$id)->find();
        $this->assign('id',$result['id']);
		return $this->fetch();*/
	
	public function delete($id){
		$delres=db('admin')->where('id',$id)->delete();
		if($delres)
            {
                $this->success('删除成功');
            }
            else
            {
                $this->error('删除失败');
            }
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
		/*$ceshi=is_string($data['name']);
		$ceshi1=strcmp('1234',$data['name']);
		print_r($ceshi1);exit();
		
		$result=$this->obj->getAdminByName($data);
		print_r($result);
		exit;*/
		$result=db('Admin')->where('name','=',$data['name'])->find();
		if($result){
			$this->error('该用户已经存在');
		}else{
			
		
        //$data 提交给model层
        $res = $this->obj->addAdmin($data);
        if($res){
            $this->success('save成功');
        }
        else 
        {
            $this->error('save失败');
        }
		}
    }

    public function update() {
		
		$data = input('post.');
		//print_r('$data');exit();
		dump($data);die;
		$result=db('Admin')->where('id','=',$data['id'])->find();
		if(!$result){
			$this->error('不存在这个用户');
		}else{
         $validate = validate('admin');
         if(!$validate->scene('update')->check($data)){
        	$this->error($validate->getError());
         }
         $res =  $this->obj->save($data, ['id' => intval($data['id'])]);
         if($res) {
            $this->success('更新成功');
         } else {
            $this->error('更新失败');
        }}
    }

    

}
