<?php
namespace app\admin\controller;

use app\admin\model\Teacher_login;
use think\Db;

class Loginapi
{
    //登录
    public function login()
    {
//        $data['mobile_number']=request()->post('mobile_number');
//        $password=request()->post('password');
//        $data['password']=md5(md5($password));
        $data = ['mobile_number' => '123', 'password' => '123'];
        $teacher_login = new Teacher_login();
        $res = $teacher_login->login($data);

    }

}
