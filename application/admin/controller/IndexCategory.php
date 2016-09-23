<?php
/**
 * +----------------------------------------------------------------
 * | 首页栏目管理 [ LET US GO ]
 * +----------------------------------------------------------------
 * | 提供首页栏目管理的功能
 * +----------------------------------------------------------------
 * | Author: 洪井生<邮箱18946036570@163.com>
 * +----------------------------------------------------------------
 * | Date: 2016/9/23 0023
 * +----------------------------------------------------------------
 * | Time: 9:42
 * +----------------------------------------------------------------
 */

namespace app\admin\controller;

use think\Controller;

class IndexCategory extends Controller
{
    public function index()
    {
        $category = new \app\admin\service\cmdcw\Category();
        $indexCategoryList = $category->getIndexCategoryList();
        $this->assign('indexCategoryList', $indexCategoryList);
        return $this->fetch();
    }

    public function deleteOneCategory($id=null)
    {
        $category = new \app\admin\service\cmdcw\Category();
        $res = $category->deleteOneCategory((int)$_REQUEST['id']);
        echo $res['msg'];
    }
}