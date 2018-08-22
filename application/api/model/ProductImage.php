<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 14:22
 */

namespace app\api\model;


use think\Model;

class ProductImage extends  Model
{
    protected  $hidden=['delete_time'];
    public function images(){
        return $this->belongsTo('Image','img_id','id');
    }
}