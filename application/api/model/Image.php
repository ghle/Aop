<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 17:02
 */

namespace app\api\model;


use think\Model;

class Image extends Model
{
    protected $hidden=['delete_time','update_time'];
}