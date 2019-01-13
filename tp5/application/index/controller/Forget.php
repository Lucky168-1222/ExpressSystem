<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-14
 * Time: 下午5:49
 */
namespace app\index\controller;
use think\Controller;

class forget extends Controller
{
    //忘记密码
    // 图片变化参考：https://blog.csdn.net/liona_koukou/article/details/74391977
    public function index()
    {
        return $this -> fetch();
    }

    // 修改密码
    public function changepwd()
    {
        $param = input('post.');
        $phone=$param['phone'];
        if(empty($param['phone'])){  $msg='手机号不能为空'; $this->error($msg);  }
        if(empty($param['pwd1']) or empty($param['pwd2'])){  $msg='新密码输入不能为空'; $this->error($msg);  }
        if($param['pwd1']!==$param['pwd2']){  $msg='两次密码输入不一致'; $this->error($msg);  }
        $one=db('employee')->where('phone',$phone)->find();
        if(empty($one)){
            $msg='该手机号用户在数据库中不存在！'; $this->error($msg);
        }
        else{
            db('employee')->where('phone',$phone)->update([
                'password'=>md5($param['pwd1'])
            ]);
            $this->success('密码修改成功，重新登录！','/tp5/public/index/login');
        }
    }
}
