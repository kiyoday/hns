<?php
namespace app\index\controller;
use think\Controller;

class Book extends Controller
{
	public function _initialize()
    {
        $this->obj = model('category');
        $this->obj1 = model('book');

    }

    public function index()
    {
    	$categorys = $this->obj->getcategory();
        return $this->fetch('',[
            'categorys'=>$categorys,
        ]);
    }

    public function save(){
    	//dump(input('post.'));die;
        if(request()->isPost())
        {
            $data = input('post.');
            if($_FILES['photo']['tmp_name']){
            $file = request()->file('photo');
            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
            $photo1 = 'http://127.0.0.1/hns/' . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
            $data['photo']= $photo1;  
            }
        }
            $validate = validate('Book');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $res = $this->obj1->add($data);
            if($res){
                $this->success('上传成功','index/index');
            }
            else 
            {
                $this->error('上传失败');
            }
        }
    	return $this->fetch();
    }
}

//->validate(['ext'=>'jpg,png,gif,jpeg'])