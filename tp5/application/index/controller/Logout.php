<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-5-7
 * Time: 下午10:42
 */
namespace app\index\controller;
use think\Controller;
use think\Session;

class logout extends Controller
{
    // 注销登录
    public function index()
    {
        // 清楚用户登录信息
        Session::delete('user_id');
        Session::delete('username');
        $this->redirect(url('/index'));
    }
}