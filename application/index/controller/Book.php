<?php
namespace app\index\controller;
use think\Controller;

class Book extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
