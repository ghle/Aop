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
    protected  $hidden=['delete_time','create_time','update_time','summary'];
    /*
     * 首页推荐15
     */
    public static function getrecentmodel($count){
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;

    }
    public  function imgs(){
        return $this->hasMany('product_image','product_id','id');
    }
    public function Property(){
        return $this->hasMany('product_property','product_id','id');
    }
    
    public static function GetProDet($id){
//        商品详情：图片 属性
        $res= self::with(['Property','imgs.images'])->find($id);
        return $res;
    }



}