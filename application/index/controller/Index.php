<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
	 public function _initialize()
    {
        $this->obj = model('category');
        $this->obj1 = model('book');
    }
	
    public function index()
    {
        $categorys = $this->obj->getcategory();
        $books = $this->obj1->indexgetbook();
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,

        ]);
    }
}
