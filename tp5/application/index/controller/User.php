<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-5-8
 * Time: 上午12:06
 */
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Cookie;


class User extends Controller
{
    public function index()
    {
        $username = Cookie::get('username');  // 获取cookie 用户名
        $user = db('employee')->where('loginname', $username)->find();

        $this->assign('role',$user['role']);
        $this->assign('point',$user['point']);

        // 获取有多少条站内信
        if($user['role'] == 1){ // 超级管理员
            $mess_num=db('news')->where("is_see_role1",0)->count();
        }elseif($user['role'] == 2){ // 网点负责人
            $map['point']=array('eq',$user['point']);
            $map['is_see_role2']=array('eq',0);
            $map['has_permission_point']=array('eq',1);
            $mess_num=db('news')->where($map)->count();
        }elseif ($user['role'] == 3){
            $map['point']=array('eq',$user['point']);
            $map['is_see_role3']=array('eq',0);
            $map['has_permission_people']=array('eq',1);
            $map['has_permission_point']=array('eq',0);
            $mess_num=db('news')->where($map)->count();
        }
        $this->assign('messnum',$mess_num);

        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet())
        {
            $name = Request::instance() ->param("name" , 0);
            $mess =db("employee") -> where('loginname',$name) -> find();
//        var_dump($mess);die();
            $this->assign('mess',$mess);
            return $this->fetch();
        }
        else{
            $param = input('post.');
            if(empty($param['name'])){ $msg='姓名不能为空'; $this->error($msg); }
            if(empty($param['phone'])){ $msg='电话不能为空'; $this->error($msg); }
            if(empty($param['email'])){ $msg='邮箱不能为空'; $this->error($msg); }
            if(empty($param['address'])){ $msg='地址不能为空'; $this->error($msg); }
            if(empty($param['phonebackup'])){ $msg='紧急联系电话不能为空'; $this->error($msg); }

            $result = db("employee")->where('number',$user['number'])->update([
                'name'=> $param['name'],
                'phone'=> $param['phone'],
                'address'=> $param['address'],
                'phonebackup'=> $param['phonebackup'],
                'email' => $param['email']
            ]);
            if($result !== false){
                $this->success("个人信息修改成功！",'/tp5/public/index/user?name='.$username);
            }else{
                $this->error("个人信息修改失败！",'/tp5/public/index/user?name='.$username);
            }
        }

    }

    // 修改密码
    public function changepasswd()
    {
        // 判断请求方式
        $request = Request::instance();
        if($request -> isPost())
        {
            $param = input('post.');
            //判断信息是否为空
            if(empty($param['oldpwd'])){ $msg='原始密码能为空'; $this->error($msg); }
            if(empty($param['newpwd'])){ $msg='新密码不能为空'; $this->error($msg); }
            if(empty($param['renewspwd'])){ $msg='确认密码不能为空'; $this->error($msg); }

            $oldpwd = $param['oldpwd'];
            $username = Cookie::get('username');
            // 验证用户名
            $has = db('employee')->where('loginname', $username)->find();

            // 验证密码
            if($has['password'] != md5($oldpwd))
            {
                $msg='原始密码输入错误！'; $this->error($msg);
            }
            else
            {
                if($param['newpwd'] != $param['renewspwd'])
                {
                    $msg='新输入密码两次不一致，请重新输入！'; $this->error($msg);
                }
                else
                { // 更新数据库
                    $result = db("employee")->where('loginname',$username)->update(["password"=>md5($param['newpwd'])]);
                    if($result)
                    {
                        $this->success("密码修改成功，请重新登录！",'/tp5/public/index/login');
                    }
                    else
                    {
                        $this->success("发生了一些错误，请重新修改提交！",'index');
                    }
                }
            }
        }
    }
}