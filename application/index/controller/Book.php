<?php
namespace app\index\controller;
use think\Controller;
class Book extends Controller
{
    public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
    public function index()
    {   $username=session('name');
        $userid=session('uid');
        if(!$username || !$userid){
            return redirect(url('user/login'));
        }else{
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->getbook();
        $shop_cart = session('shop_cart');
        $this->assign('shop_cart', $shop_cart);
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,

        ]);
        }
    }

    public function save(){
        //dump(input('post.'));die;
        if(!session('uid')){
            $this->error('请先登录');
        }
        $uid = session('uid');
        if(request()->isPost())
        {
            $data = input('post.');
            $data['uid'] = $uid;
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