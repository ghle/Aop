<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 14:22
 */

namespace app\api\model;


use think\Model;

class ProductProperty extends  Model
{
    protected $hidden=['delete_time','update_time'];
}