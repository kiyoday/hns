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
        dump($data);die;
        if($_FILES['photo']['tmp_name']){
            $file = request()->file('photo');
            $info = $file->validate(['size'=>15678,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                $info->getExtension();
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
