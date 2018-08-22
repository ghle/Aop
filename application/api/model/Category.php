<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 16:03
 */

namespace app\api\model;

use think\Model;
class Category extends  Model
{
    protected  $hidden =['delete_time','update_time','topic_img_id','description'];

    public  function  topicimg(){
        return $this->hasOne('Image','id');
    }
    public  function products(){
        return $this->hasMany('Product','category_id','id');
    }

    /**
     * 左边导航 数据库操作
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static  function  GetLeftNav(){
        return self::with(['topicimg','products'])->select();
    }


    public function  hasproducts(){
        return $this->hasMany('Product','category_id','id');
    }

    public  static function  GetByCategory($catid){
        return self::with(['hasproducts','topicimg'])->select($catid);
    }

}