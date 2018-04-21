<?php
namespace app\index\controller;
use think\Controller;

class View extends Controller
{	
     public function _initialize()
    {
        $this->objc = model('category');
        $this->obj1 = model('book');
    }
    
    public function index()
    {
        $categorys = $this->objc->getcategory();
        $books = $this->obj1->indexgetbook();
        return $this->fetch('',[
            'categorys'=>$categorys,
            'books'=>$books,
        ]);
    }
}