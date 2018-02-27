<?php

namespace app\home\model;

use think\Model;

class User extends Model
{

    /**
     * 查询用户名是否存在
     * @param $name
     * @return bool
     */
    public  function  getInfo($name){
         $info=$this->where('user_name',$name)->find();
         return empty($info)?false:$info;
    }


}
