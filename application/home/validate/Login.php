<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/26 0026
 * Time: 下午 9:40
 */

namespace app\home\validate;

use think\Validate;

class Login extends Validate
{

    //验证规则
    protected $rule =   [
        'uname'  => 'require|min:5',
        'password'  => 'require|min:5',
        'code' =>'min:5',
    ];

    protected $message  =   [
        'uname.require' => '用户名必须',
        'uname.min'     => '用户名最少不能小于5个字符',
        'code'        => '验证码不得小于5个字符',
    ];
}