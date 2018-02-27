<?php

namespace app\home\controller;


use app\home\model\User;
use app\home\validate\Login;
use think\captcha\Captcha;
use think\Controller;
use think\Request;

class Signin extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

         return $this->fetch();
    }


    public function login(Request $request)
    {
        //dump($request->param());
         $validate=new Login();

         dump($validate);die;
         if(!$validate->check($request->param())){
             return json(['state'=>false,'msg'=>$validate->getError()]);
          }


          $sign=new \app\home\logic\Signin();


          return $sign->login($request);


         //加积分

         //签到

         //显示在线

         //记录日志




    }

    /**
     * 调用验证码
     */
    public  function  captcha(){
        $captcha = new Captcha();
        return $captcha->entry(1);
    }



}
