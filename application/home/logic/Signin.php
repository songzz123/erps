<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/26 0026
 * Time: 下午 10:33
 */

namespace app\home\logic;


use app\home\model\User;
use think\facade\Session;

class Signin
{

     public  function  login($request){

         /*登录验证*/


         //统计登录次数
         Session::set('login_num',Session::get('login_num')+1);

         //验证验证码，这里的第二个参数，是用来识别多个验证码
//         \session('captch:1','dada');
//
//         \session('sms:2','asdsadas');

         if( !captcha_check($request->param('code'),1) && Session::get('login_num')>=3){
             return ['state'=>false,'msg'=>'验证码错误'];
         }

         $uname=$request->param('uname');

         $password=$request->param('password');


         //用户名验证
         $user=(new User())->getInfo($uname);
         //只要一边为真就会成立
         if(!$user || !password_verify($password,$user->password)){
             return json(['state'=>false,'msg'=>'账号或密码错误']);
         }

         //如果登录成功，删掉标识
         Session::delete('login_num');
         Session::set('login',true);
         return  ['state'=>true,'msg'=>'登录成功'];

     }


     public  function  captcha(){
         Session::set('login_num',Session::get('login_num')+1);
         if(Session::get('login_num')>=3){
             return ['state'=>false,'msg'=>'错误次数太过与频繁'];
         }
     }
}