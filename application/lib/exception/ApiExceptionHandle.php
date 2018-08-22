<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 12:59
 */

namespace app\lib\exception;

use think\exception\Handle;

class ApiExceptionHandle extends Handle
{
    public $httpCode=500;

    public function render(\Exception $e){

        if(config('app_debug') == true) {
            return parent::render($e);
        }

        if($e instanceof ApiException){
            $this->httpCode=$e->httpCode;
        }

        return show(0,$e->getMessage(),[],$this->httpCode);
    }
}