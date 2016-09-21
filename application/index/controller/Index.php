<?php
namespace app\index\controller;
use think\Controller;

class Index extends  Controller
{ 
    public function index($name = 'World')
    {
	    $this->assign('name', 'aaaaaa');
         return $this->fetch();
    }
}
