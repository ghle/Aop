<?php
namespace app\api\controller;
use think\Controller;

use think\Request;
use think\Validate;

class Common extends Controller {
    protected $request; // 用来处理参数
    protected $validater; // 用来验证数据/参数
    protected $params; // 过滤后符合要求的参数
    protected $rules = array(
        
        'V1.Banner' => array(
            'banner'=> array(
                    'banner_id' => 'require|number',
            ),
        ),
        'V1.Theme' => array(
            'themes'=> array(

            ),
        ),

            
    );

    protected function _initialize() {
        parent::_initialize();
        $this->request = Request::instance();
        
        $this->params = $this->check_params($this->request->param(true));
       
        
    }

    /**
     * api 数据返回
     * @param  [int] $code [结果码 200:正常/4**数据问题/5**服务器问题]
     * @param  [string] $msg  [接口要返回的提示信息]
     * @param  [array]  $data [接口要返回的数据]
     * @return [string]       [最终的json数据]
     */
    public function return_msg($code, $msg = '', $data = [],$httpCode=200) {
        /*********** 组合数据  ***********/
        $return_data['code'] = $code;
        $return_data['msg']  = $msg;
        $return_data['data'] = $data;
        /*********** 返回信息并终止脚本  ***********/
        echo json_encode($return_data,$httpCode);die;
    }
   
    /**
     * 验证参数 参数过滤
     * @param  [array] $arr [除time和token外的所有参数]
     * @return [return]      [合格的参数数组]
     */
    public function check_params($arr) {
        /*********** 获取参数的验证规则  ***********/
        $rule = $this->rules[$this->request->controller()][$this->request->action()];
        /*********** 验证参数并返回错误  ***********/
        $this->validater = new Validate($rule);
        if (!$this->validater->check($arr)) {
            $this->return_msg(400, $this->validater->getError());
        }
        /*********** 如果正常,通过验证  ***********/
        return $arr;
    }

}