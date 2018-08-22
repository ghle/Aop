<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 15:54
 */

namespace app\api\controller\v1;
use app\api\controller\Common;
use app\api\model\Category as CategoryModel;
use app\common\lib\exception\ApiException;

class Category extends  Common
{
    /**
     * 左侧导航列表接口
     * @return string|\think\response\Json
     * @throws ApiException
     */
    public  function  LeftNav(){

       $result= CategoryModel::GetLeftNav();
        if(!$result){
            throw new ApiException('网络数据异常',500);
        }
       return show(2000,'数据返回成功',$result,200);
    }

    public  function  ByCategory(){

        $param=$this->params;

        $catid=$param['catid'];//catid 不能为空

//        获取对应数据

        $result=CategoryModel::GetByCategory($catid);

        if(!$result){
            throw new ApiException('该类目下没有暂时没有数据哦',400);
        }

        return show(2000,'数据返回成功啦',$result,200);

    }


}