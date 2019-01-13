<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-14
 * Time: 上午10:17
 */
namespace app\index\controller;
use think\Controller;


class Login extends Controller
{
    // 登录首页加载的方法
    public function index()
    {
        return $this -> fetch();
    }

    // 处理登录
    public function doLogin()
    {
        $param = input('post.');
//        var_dump($param);die();
        if(empty($param['username']) or $param['username'] == ""){
            $msg='用户名不能为空'; $this->error($msg);
        }

        if(empty($param['userpwd'])){
            $msg='密码不能为空'; $this->error($msg);
        }

        // 验证用户名
       $has = db('employee')->where('loginname', $param['username'])->find();
        //$has = Db::table('employee')->where('loginname', $param['username'])->find();
        if(empty($has)){
           $msg='用户名密码错误'; $this->error($msg);
        }

        // 验证密码
        if($has['password'] != md5($param['userpwd'])){
//          if($has['password'] != $param['userpwd']){
            $msg='用户名密码错误'; $this->error($msg);
        }

        // 记录用户登录信息
        cookie('user_id', $has['number'], 3600);  // 一个小时有效期
        cookie('username', $has['loginname'], 3600);

        $this->redirect(url('/admin'));
    }
    public function register(){
        return $this->fetch();
    }


}