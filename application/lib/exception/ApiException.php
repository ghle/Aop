<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 13:05
 */

namespace app\lib\exception;

use think\Exception;

class ApiException extends  Exception
{
    public $message='';
    public $httpCode=500;
    public $code=0;

    public  function __construct($msg='',$httpCode=0,$code=0)
    {
        $this->message=$msg;
        $this->code=$code;
        $this->httpCode=$httpCode;
    }
}