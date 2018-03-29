<?php
namespace app\index\controller;
use think\Controller;

class Detail extends Controller
{
    public function about_us()
    {
        return $this->fetch();
    }

    public function cart()
    {
        return $this->fetch();
    }

    public function category()
    {
        return $this->fetch();
    }

    public function contact_us()
    {
        return $this->fetch();
    }

    public function error404()
    {
        return $this->fetch();
    }

    public function faq()
    {
        return $this->fetch();
    }

    public function view()
    {
        return $this->fetch();
    }
}
