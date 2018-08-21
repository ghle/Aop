<?php 

namespace app\api\controller\v1;

use app\api\controller\Common;

use app\api\model\Banner as BannerModel;

class Banner extends  Common
{	
	/**
	 * [banner banner图接口]
	 * @author lucky
	 * @DateTime 2018-08-20T16:47:17+0800
	 * @return   [type]                   [description]
	 */
	public function banner()
	{
		$param=$this->params;

		$banner_id=$param['banner_id'];

		$list=BannerModel::getBannerById($banner_id);

		if(!$list){
			$this->return_msg(4000,'数据不存在');
		}
		$this->return_msg(2000,'数据返回成功',$list);

	}
}

 ?>