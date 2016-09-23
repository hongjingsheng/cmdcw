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

namespace app\admin\service\cmdcw;


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
        return $this->obj->field('id,category_name,sort,status')->select();
    }

    /**
     * 创建单个首页栏目
     * @param string $categoryName
     * @param null $sort
     * @return array
     */
    public function addOneIndexCategory($categoryName = '', $sort = NULL)
    {
        //异常检查
        if ($categoryName === '') {
            return $res = [
                'code' => -1,
                'msg' => '栏目名称不能为空'
            ];
        }

        $data = [
            ['category_name' => $categoryName, 'sort' => $sort, 'owner_id' => 1, 'status' => 1, 'mtime' => date('Y-m-d H:i:s'), 'atime' => date('Y-m-d H:i:s')]
        ];
        if ($this->obj->insertAll($data)) {
            return $res = [
                'code' => 0,
                'msg' => '创建栏目成功'
            ];
        }
    }

    public function updateOneIndexCategory($id,$categoryName = '', $sort = NULL)
    {
        //异常检查
        if ($categoryName === '') {
            return $res = [
                'code' => -1,
                'msg' => '栏目名称不能为空'
            ];
        }

        $data = [
            ['category_name' => $categoryName, 'sort' => $sort, 'owner_id' => 1, 'status' => 1, 'mtime' => date('Y-m-d H:i:s'), 'atime' => date('Y-m-d H:i:s')]
        ];
        if ($this->obj->where('id',$id)->update($data)) {
            return $res = [
                'code' => 0,
                'msg' => '更新栏目成功'
            ];
        }
    }

    /**
     *
     * @param null $id
     * @return array
     */
    public function deleteOneCategory($id = NULL)
    {
        //异常检查
        if ($id === NULL) {
            return $res = [
                'code' => -1,
                'msg' => '请选择要删除的栏目'
            ];
        }

        if (!$this->obj->where('id', $id)->delete()) {
            return $res = [
                'code' => -2,
                'msg' => '执行删除时，SQL操作失败,很可能是当前栏目已经不存在'
            ];
        }else{
            return $res = [
                'code' => 0,
                'msg' => '成功删除一个栏目'
            ];
        }
    }
}