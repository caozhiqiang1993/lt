<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/20
 * Time: 17:54
 */

namespace app\index\controller;


use think\Controller;

class Login extends Controller
{
    public function login(){
        if(request()->isAjax()){
            $input = input('post.');
            $arr = [
                'code' => 1
            ];
            if($input['username'] != 'test' || $input['userpsd'] != 'test'){
                return json($arr);
            }
            session('user_id',1);
            $arr['code'] = 0;
            return json($arr);
        }
        return $this->fetch();
    }
}