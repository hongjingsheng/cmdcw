<?php
/**
 * +----------------------------------------------------------------
 * | 栏目处理 [ LET US GO ]
 * +----------------------------------------------------------------
 * | 包括栏目的增删改查等基本业务操作
 * +----------------------------------------------------------------
 * | Author: 洪井生
 * +----------------------------------------------------------------
 * | Date: 2016/9/22 0022
 * +----------------------------------------------------------------
 * | Time: 11:09
 * +----------------------------------------------------------------
 */

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $category = new \app\index\service\cmdcw\Category();
        print_r($category->getIndexCategoryList());
        $this->assign('name', 'aaaaaa');
        return $this->fetch('index');
    }

    public function testWrord()
    {
        echo 'test';
    }
}
