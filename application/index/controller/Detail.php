<?php
namespace app\index\controller;
use think\Controller;
// use think\facade\Request;

class Detail extends Controller
{
    public function index()
    {
        return $this->fetch();
        // dump(Request::url());

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
