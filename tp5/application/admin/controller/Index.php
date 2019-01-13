<?php
namespace app\admin\controller;
use app\admin\model\Base;
use think\Cookie;
use think\Request;

class Index extends Base
{
    public function index()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
        $point_list = db("point")->column("name"); // 获取所有网点
        $this->assign('point_list',$point_list);
        $username = Cookie::get('username');    // 获取用户名
        if($username){
            $this->assign("username",$username);
            // 判断请求方式
            $request = Request::instance();
            $param = input('post.');
//            var_dump($param['selpoint']);die();
            if($request->isGet() | ($request->isPost() and $param['selpoint']=="全部") ){
                // 判断用户角色
                if($this->role == 1){ // 超级管理员
                    $express_all = db("express") -> where("isproexpress","=",0) -> count(); // 正常快件总数
                    $express_ispro = db("express") -> where("isproexpress","=",1) -> count(); // 问题件总数
                    $employee_all = db('employee') -> where("isStay","=",1)->count();// 在职员工总数
                    $point_all=db("point")->count();//网点总数
                    $money_all =db("express")->query("select sum(price) as money_all from express where status=4")[0]["money_all"];
                    $this->assign("express_all",$express_all);
                    $this->assign("express_ispro",$express_ispro);
                    $this->assign("employee_all",$employee_all);
                    $this->assign("point_all",$point_all);
                    $this->assign("money_all",$money_all);

                    // 已完成快件数据
                    $express_ok = db("express") -> where("isproexpress","=",0)->where("status","=",4) -> count(); // 正常快件总数
                    // 进行中快件
                    $express_ing = $express_all-$express_ok;
                    // 问题快件数目
                    $express_pro=$express_ispro;
                    $this->assign("express_ok",$express_ok);
                    $this->assign("express_ing",$express_ing);
                    $this->assign("express_pro",$express_pro);

                    // 超级管理员人数
                    $admin = db("employee")->where("role","=",1)->count();
                    // 网点负责人人数
                    $principal = db("employee")->where("role","=",2)->count();
                    // 普通员工人数
                    $normal = db("employee")->where("role","=",3)->count();
                    $this->assign("admin",$admin);
                    $this->assign("principal",$principal);
                    $this->assign("normal",$normal);

                }else{    // 网点负责人或者网点员工
                    $express_all = db("express")->where("currentpoint",$this->point)-> count(); // 正常快件总数
                    $express_ispro = db("express")->where("currentpoint",$this->point) -> where("isproexpress","=",1) -> count(); // 问题件总数
                    $employee_all = db('employee')->where("point",$this->point)-> where("isStay","=",1)->count();// 在职员工总数
//                    $point_all=db("point")->count();//网点总数
                    $money_all =db("express")->where("currentpoint",$this->point)->query("select sum(price) as money_all from express where status=4")[0]["money_all"];
                    $this->assign("express_all",$express_all);
                    $this->assign("express_ispro",$express_ispro);
                    $this->assign("employee_all",$employee_all);
//                    $this->assign("point_all",$point_all);
                    $this->assign("money_all",$money_all);

                    // 已完成快件数据
                    $express_ok = db("express")->where("currentpoint",$this->point) -> where("isproexpress","=",0)->where("status","=",4) -> count(); // 正常快件总数
                    // 进行中快件
                    $express_ing = $express_all-$express_ok;
                    // 问题快件数目
                    $express_pro=$express_ispro;
                    $this->assign("express_ok",$express_ok);
                    $this->assign("express_ing",$express_ing);
                    $this->assign("express_pro",$express_pro);

                    // 超级管理员人数
                    $admin = db("employee")->where("point",$this->point)->where("role","=",1)->count();
                    // 网点负责人人数
                    $principal = db("employee")->where("point",$this->point)->where("role","=",2)->count();
                    // 普通员工人数
                    $normal = db("employee")->where("point",$this->point)->where("role","=",3)->count();
                    $this->assign("admin",$admin);
                    $this->assign("principal",$principal);
                    $this->assign("normal",$normal);
                }

                $this->assign("keyword","");
                return $this->fetch();
            }else{
                $express_all = db("express")->where("currentpoint",$param['selpoint']) -> where("isproexpress","=",0) -> count(); // 正常快件总数
                $express_ispro = db("express")->where("currentpoint",$param['selpoint']) -> where("isproexpress","=",1) -> count(); // 问题件总数
                $employee_all = db('employee')->where("point",$param['selpoint'])-> where("isStay","=",1)->count();// 在职员工总数
                $point_all=db("point")->count();//网点总数
                $money_all =db("express")->where("currentpoint",$param['selpoint'])->query("select sum(price) as money_all from express where status=4")[0]["money_all"];
                $this->assign("express_all",$express_all);
                $this->assign("express_ispro",$express_ispro);
                $this->assign("employee_all",$employee_all);
                $this->assign("point_all",$point_all);
                $this->assign("money_all",$money_all);

                // 已完成快件数据
                $express_ok = db("express")->where("currentpoint",$param['selpoint']) -> where("isproexpress","=",0)->where("status","=",4) -> count(); // 正常快件总数
                // 进行中快件
                $express_ing = $express_all-$express_ok;
                // 问题快件数目
                $express_pro=$express_ispro;
                $this->assign("express_ok",$express_ok);
                $this->assign("express_ing",$express_ing);
                $this->assign("express_pro",$express_pro);

                // 超级管理员人数
                $admin = db("employee")->where("point",$param['selpoint'])->where("role","=",1)->count();
                // 网点负责人人数
                $principal = db("employee")->where("point",$param['selpoint'])->where("role","=",2)->count();
                // 普通员工人数
                $normal = db("employee")->where("point",$param['selpoint'])->where("role","=",3)->count();
                $this->assign("admin",$admin);
                $this->assign("principal",$principal);
                $this->assign("normal",$normal);

                $this->assign("keyword",$param['selpoint']);

                return $this->fetch();
            }
        }
        else{
            $msg='登录时间过期，请重新登录！'; $this->error($msg);
            $this->redirect(url('/index'));
        }
    }

    // 所有通知
    public function news()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        $type = Request::instance() ->param("type" , 0);
        if($type=="all"){
            // 获取所有通知
            if($this->role == 1){ // 超级管理员
                $mess=db('news')->order('time desc')->select();
            }elseif($this->role == 2){ // 网点负责人
                $con["point"]=$this->point;
                $con["has_permission_point"]=1;
                $mess=db('news')->where($con)->order('time desc')->select();
            }elseif ($this->role == 3){
                $con["point"]=$this->point;
                $con["has_permission_people"]=1;
                $mess=db('news')->where($con)->order('time desc')->select();
            }

            // 更新所有通知为已读
            if($this->role ==1 ){
                db("news")->where("is_see_role1","=",0)->update(["is_see_role1"=>1]);
            }elseif ($this->role==2){
                db("news")->where("is_see_role2","=",0)->update(["is_see_role2"=>1]);
            }elseif ($this->role ==3){
                db("news")->where("is_operation","=",0)->where("is_see_role3","=",0)->update(["is_see_role3"=>1]);
            }
        }else{
            // 获取所有通知
            if($this->role == 1){ // 超级管理员
                $mess=db('news')->where("is_operation",$type)->order('time desc')->select();
            }elseif($this->role == 2){ // 网点负责人
                $con["point"]=$this->point;
                $con["has_permission_point"]=1;
                $con["is_operation"]=$type;
                $mess=db('news')->where($con)->order('time desc')->select();
            }elseif ($this->role == 3){
                $con["point"]=$this->point;
                $con["has_permission_people"]=1;
                $con["is_operation"]=$type;
                $mess=db('news')->where($con)->order('time desc')->select();
            }
        }

        $this->assign('mess',$mess);
//        var_dump($mess);die();
        return $this->fetch();
    }

    // 同意
    public function through(){
        $loginname = Request::instance() ->param("loginname" , 0);
        db("employee")->where("loginname","=",$loginname)->update(["isformal"=>1]);
        if($this->role ==1 ){
            db("news")->where("main1",$loginname)->where("action","=","注册")->update(["is_see_role1"=>1,"is_action"=>1]);
        }elseif($this->role ==2){
            db("news")->where("main1",$loginname)->where("action","=","注册")->update(["is_see_role2"=>1,"is_action"=>1]);
        }
        return $this->redirect("/tp5/public/admin/index/news?type=all");
    }
    // 驳回
    public function back(){
        $loginname = Request::instance() ->param("loginname" , 0);
//        db("employee")->where("loginname","=",$loginname)->update(["isformal"=>1]);
        if($this->role ==1 ){
            db("news")->where("main1",$loginname)->where("action","=","注册")->update(["is_see_role1"=>1,"is_action"=>1]);
        }elseif ($this->role==2){
            db("news")->where("main1",$loginname)->where("action","=","注册")->update(["is_see_role2"=>1,"is_action"=>1]);
        }
        return $this->redirect("/tp5/public/admin/index/news?type=all");
    }

    //删除消息
    public function deletenews(){
        $main1 = Request::instance() ->param("main1" , 0);
        $time = Request::instance() ->param("time" , 0);
        $con["main1"]=$main1;
        $con["time"]=$time;
        db('news')->where($con)->delete();
        $this->redirect("/tp5/public/admin/index/news?type=all");
    }
}