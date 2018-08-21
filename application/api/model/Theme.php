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
   public function lists(){
       return $this->hasMany('theme_product', 'banner_id', 'id');
   }
}