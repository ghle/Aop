<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 17:26
 */

namespace app\api\controller\v1;

use app\api\controller\Common;
use app\api\model\Product as ProductModel;

class Product extends  Common
{
    /*
     * 首页推荐15最近的数据
     */
   public function  getrecent($count=''){

       $param=$this->params;

       if(!isset($param['count'])){
            $count=15;
       }
       if(isset($param['count'])){
           $count=$param['count'];
       }
         $var=ProductModel::getrecentmodel($count);

           if(!$var){
                $this->return_msg(4000,'数据返回错误');
           }

           $this->return_msg(2000,'数据返回成功',$var);

   }

   public  function getdetail(){
       /**********验证参数***********/
        $param= $this->params;
//        获取商品详细信息入口：
//            banner
//            主题列表
//            首页15条数据的推荐
//            分类列表
//            订单商品详情
//            购物车
//***********************       第一种情况***********************



   }
}