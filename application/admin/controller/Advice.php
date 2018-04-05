<?php
namespace app\admin\controller;
use think\Controller;

class Advice extends Controller
{
     public function _initialize()
    {
        $this->obj = model('advice');
    }

    public function index()
    {   
        $advices = $this->obj->getadvice();
        return $this->fetch('',[
            'advices'=>$advices,
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
            $editres=db('advice')->where('type_id',$tid)->update($data);
            if($editres)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        $type=db('advice')->find($tid);
        $this->assign('advice',$type);
        return $this->fetch();    
    }

    public function del($tid)
    {   
        if(request()->ispost())
        {   
            $data=input('post.');
            $delres=db('advice')->where('id',$tid)->delete();
            if($delres)
            {
                $this->success('审核完成');
            }
            else
            {
                $this->error('出错，请与管理员联系');
            }
        }
        $type=db('advice')->find($tid);
        $this->assign('advice',$type);
        return $this->fetch();
    }

    public function save()
    {
        //print_r(input('post.'));
        //print_r(request()->post());
        $data = input('post.');
        $validate = validate('advice');
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
