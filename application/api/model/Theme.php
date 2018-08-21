<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 10:18
 */

namespace app\api\model;


use think\Model;

class Theme extends Model
{
    protected $hidden = ['delete_time', 'topic_img_id', 'head_img_id'];

    public function headImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }
    public function topicImg(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
    public  function  product(){
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }
    /**
     * 专题接口模型
     */
    public  static function  themeposition($ids){
            return self::with('headImg,topicImg')->select($ids);
    }
//    点击进入相应专题列表接口
    public static function getproductmodel($proid){
            return self::with('product,headImg,topicImg')->find($proid);
    }






}