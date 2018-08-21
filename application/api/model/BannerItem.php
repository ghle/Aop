<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 16:33
 */

namespace app\api\model;

use think\Model;

class BannerItem extends  Model{

    protected $hidden = ['id', 'img_id', 'banner_id', 'delete_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }

}