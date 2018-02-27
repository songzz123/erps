<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------




Route::group('home',function (){


    Route::get('/index', 'home/index/index'); //后台页面

    Route::get('/signin', 'home/Signin/index');//登录页面

    Route::post('/login', 'home/Signin/login');//登录处理

    Route::get('/captcha', 'home/Signin/captcha');//验证码

    Route::get('/setting', 'home/setting/index'); //设置首页

});




