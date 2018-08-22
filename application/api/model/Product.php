<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 14:22
 */

namespace app\api\model;


use think\Model;

class Product extends  Model
{
    /*
     * 首页推荐15
     */
    public static function getrecentmodel($count){
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;

    }
    public static function GetProDet($id){
//        商品详情：图片 属性
//        $res= self::with()find($id);
        

//        return $res;
    }


}