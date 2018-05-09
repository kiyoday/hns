<?php
namespace app\admin\controller;
use think\Controller;

class Acbook extends Controller
{
    public function _initialize()
    {
        $this->obj = model('book');
    }

    public function index()
    {   
		$data=input('get.');
		//dump($data);die;
		$sdata=$result=[];
		if(!empty($data['datemin']) && !empty($data['datemax']) && strtotime($data['datemax']) > strtotime($data['datemin']) ){
			$sdata['create_time']=[
				['gt',strtotime($data['datemin'])],
				['lt',strtotime($data['datemax'])],
			];
		}
		if(!empty($data['name'])){
			$sdata['name']=['like','%'.$data['name'].'%'];
		}
		//dump($sdata);die;
        $result = $this->obj->getBookByConditionac($sdata);

        return $this->fetch('',[

			'result'=>$result,
			'datemin'=>empty($data['datemin'])? '' : $data['datemin'],
			'datemax'=>empty($data['datemax'])? '' : $data['datemax'],
			'name'=>empty($data['name'])? '' : $data['name'],
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
            $editres=db('book')->where('id',$uid)->update($data);
            if($editres)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        $bookf=db('book')->find($uid);
        $this->assign('book',$bookf);
        return $this->fetch();    
    }

    public function del($tid)
    {   
        if(request()->ispost())
        {   
            $data=input('post.');
            $delres=db('book')->where('type_id',$tid)->delete();
            if($delres)
            {
                $this->success('删除成功');
            }
            else
            {
                $this->error('删除失败');
            }
        }
        $type=db('book')->find($tid);
        $this->assign('book',$type);
        return $this->fetch();
    }

    /*public function save()
    {
        //print_r(input('post.'));
        //print_r(request()->post());
        $data = input('post.');
        $validate = validate('book');
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
    }*/

    public function update($data) {
        $res =  $this->obj->save($data, ['id' => intval($data['id'])]);
        if($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }
     //修改状态
	public function status($id,$status){
		
		//dump($id);die;
		$data=array(
		   'id'=>$id,
			'status'=>$status,
		);
		//dump($data);die;
		$validate=validate('Category');
		if(!$validate->scene('status')->check($data)){
        	$this->error($validate->getError());
        }
		$res = $this->obj->save(['status'=>$data['status']],['book_id'=>$data['id']]);
		if($res){
			$this->success('状态更新成功');
		}else{
			$this->error('状态更新失败');
		}
		
	}
    

}
