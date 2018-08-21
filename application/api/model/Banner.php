<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 16:33
 */

namespace app\api\model;

use think\Model;

class Banner extends  Model{

    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
        $banner = self::with(['items','items.img'])
            ->find($id);

//         $banner = BannerModel::relation('items,items.img')
//             ->find($id);
        return $banner;
    }
}