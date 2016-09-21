<?php
namespace app\index\controller;
use think\Controller;

class Index extends  Controller
{ 
    public function index($name = 'World')
    {
        $user = model('User');
	    $this->assign('name', 'aaaaaa');
         return $this->fetch();
    }
}
