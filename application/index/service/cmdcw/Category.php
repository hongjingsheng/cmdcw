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

namespace app\index\service\cmdcw;


class Category extends \think\Model
{
    //    数据源
    protected $table = 'cmdcw_category';
    private $obj = null;

    /**
     * Category constructor.
     * 实例化数据表对象
     */
    public function __construct()
    {

        parent::__construct();
        $this->obj = \think\Db::name('cmdcw_category');
    }

    /**
     * 获取首页的栏目列表
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getIndexCategoryList()
    {
        return $this->obj->field('category_name')->select();
    }
}