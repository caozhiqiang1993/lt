<?php
namespace app\index\controller;
use \think\Controller;

class Index extends Controller
{
    public function index()
    {
        if(session('?user_id') == false || empty(session('user_id'))){
//            $this->redirect('Login/login');
            return redirect('Login/login');
        }
        $this->request->token();
        return $this->fetch();
    }
}
