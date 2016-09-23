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

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //认证

        //资源访问
        $category = new \app\admin\service\cmdcw\Category();
        $indexCategoryList = $category->getIndexCategoryList();
        $this->assign('indexCategoryList', $indexCategoryList);
        return $this->fetch();
    }

    public function login()
    {
        return $this->fetch();
    }
}
