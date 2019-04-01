<?php
namespace app\index\controller;
use think\Controller;
// use think\facade\Request;

class Detail extends Controller
{
    public function index1()
    {
        return $this->fetch();
        // dump(Request::url());

    }
    
    public function index2()
    {
        return $this->fetch();
        // dump(Request::url());

    }
    
    public function index3()
    {
        return $this->fetch();
        // dump(Request::url());

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
