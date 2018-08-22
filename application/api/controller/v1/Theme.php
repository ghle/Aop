<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 10:11
 */

namespace app\api\controller\v1;

use app\api\controller\Common;
use app\api\model\Theme as ThemesModel;


class Theme extends Common
{
    /**
     * 专题接口
     */
    public  function thelist(){

        $param=$this->params;//*****此处数据的合理性判定也可以使用面向切片的方式书写
        $var= ThemesModel::themeposition($param['id']);

       if(!$var){
           $this->return_msg(4001,'数据返回异常'); //****此处使用异常处理为佳  现阶段 任务明确 模型使用方式
       }
        $this->return_msg(2000,'数据返回成功啦',$var);

    }

    public function getproduct(){
        $param=$this->params;

        $var= ThemesModel::getproductmodel(2);


        if(!$var){
            $this->return_msg(4001,'数据返回异常'); //****此处使用异常处理为佳  现阶段 任务明确 模型使用方式
        }
        $this->return_msg(2000,'数据返回成功啦',$var);
    }

}