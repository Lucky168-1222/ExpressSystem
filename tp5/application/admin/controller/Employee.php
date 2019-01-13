<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-15
 * Time: 上午10:48
 */
namespace app\admin\controller;
use app\admin\model\Base;
use think\Request;
use think\Cookie;


class Employee extends Base
{
    public function index()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
//        var_dump($this->point);die();

        $request = Request::instance();
        if($request -> isGet()){

            $map['loginname']  = array('neq','admin');  // 查询不等于admin的用户
            $map['isformal']  = array('eq',1);  // 查询身份为正式员工
            $employee_mess =db("employee")-> where($map)->order('jointime desc') -> select();
            $this->assign('mess',$employee_mess);
            $this->assign('word',"");
            $this->assign('serole',"2");

            return $this->fetch();
        }
        else{
            $param = input('post.');
            $value=$param['mess'];
            $role=$param['emprole'];

            $result= db("employee")->whereOr('name|number|point','like','%'.$value.'%')
                ->where('role','eq',$role)->order('jointime desc')->select();
            //dump($result);die;->where('role','eq',$role)
            $this->assign('mess',$result);
            $this->assign('word',$value);
            $this->assign('serole',$role);
            return $this->fetch();
        }

    }

    // 新增员工
    public function addemployee()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet())
        {
            // 获取所有的网点名称
            $points =db("point")-> query("select name from point WHERE name!='超级网点'");
            $this->assign('points',$points);
            return $this -> fetch();
        }
        else
        {
            $param = input('post.');
//            var_dump($param);die();
            //判断信息是否为空
            if(empty($param['emuser'])){ $msg='员工用户名称不能为空'; $this->error($msg); }
            if(empty($param['emposition'])){ $msg='员工职级不能为空'; $this->error($msg); }
            if(empty($param['emname'])){ $msg='员工姓名不能为空'; $this->error($msg); }
            if(empty($param['emtel'])){ $msg='员工电话市不能为空'; $this->error($msg); }
            if(empty($param['emtelbackup'])){ $msg='员工紧急联系人不能为空'; $this->error($msg); }
            if(empty($param['emamail'])){ $msg='员工邮箱不能为空'; $this->error($msg); }
            if(empty($param['emadress'])){ $msg='员工地址不能为空'; $this->error($msg); }
            if(empty($param['selpoint'])){ $msg='员工所属网点不能为空'; $this->error($msg); }

            // 判断员工姓名，用户名，电话和邮箱是否在数据库中已经存在
            $nameresult= db("employee")->where("name",$param['emname'])->find();
            if($nameresult){$msg='员工姓名在数据库中已经存在，请修改!'; $this->error($msg);}
            $pointp= db("employee")->where("name",$param['selpoint'])->find();
            if($pointp){$msg='网点负责人在数据库中已经存在，请修改!'; $this->error($msg);}
            $telresult= db("employee")->where("name",$param['emtel'])->find();
            if($telresult){$msg='网点联系电话在数据库中已经存在，请修改!'; $this->error($msg);}
            $emailresult= db("employee")->where("name",$param['emamail'])->find();
            if($emailresult){$msg='网点联系邮箱在数据库中已经存在，请修改!'; $this->error($msg);}

            # 获取最大的员工编号，保证员工编号递增，不重复
            $max_number = db("employee")->order('number', 'DESC')->column('number');
            $new_number = $max_number[0] + 1;

            // 在站内信表中插入数据
            // user,增加,员工,所属point,0,0,1,1
            write($this->uname,"增加",$param['emname'],$param['selpoint'],0,0,0,0,1,1);

            # 员工入职时间，如果传进来的参数为空，则自动获取系统当前时间为jointime
            $createtime = empty($param['emstarttime']) ? date("Y-m-d H:i:s") :$param['emstarttime'];
            $updatetime = date("Y-m-d H:i:s");
            $passwd = "123456";      # 初始化密码

            // 如果新加的员工是负责人，那么需要判断所负责的网点是否已经有人负责，没人负责的话需要在网点表中也更新数据
            if($param['emposition'] == 2){
                if($param['selpoint']!=="选择网点"){
                    $res1 = db('point')->where('name',$param['selpoint'])->column('principal');
//                var_dump($res1[0]);die();
                    if($res1[0] =="选择负责人"){// 在网点表里也更新下数据
                        db('point')->where('name',$param['selpoint'])->update([
                            'principal'=>$param['emname']
                        ]);
                    }else{
                        $this->error('该负责人指定的网点已经有人进行负责，请确认情况~');
                    }
                }

            }

            # 对员工角色做转化
            $data = ['number'=>$new_number,'loginname'=>$param['emuser'],'password'=>md5($passwd),'name' => $param['emname'],
                'phone'=>$param['emtel'],'phonebackup'=>$param['emtelbackup'],'email'=>$param['emamail'],
                'birthday'=>$param['embirth'],'address'=>$param['emadress'],'point'=>$param['selpoint'],
                'jointime'=>$createtime,'leavetime' => $param['emendtime'],'isStay'=>$param['emisworking'],
                'role'=>$param['emposition'],'updatetime' => $updatetime, 'isformal' => 1];
            db("employee") -> insert($data);

            $this->success("员工添加成功！",'/tp5/public/admin/employee');
        }
    }

    // 修改员工信息
    public function changeemployee()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet())
        {
            // 获取网点编号，并根据编号从数据库查数据
            $number = Request::instance() ->param("id" , 0);
            $point_mess = db("employee") -> where('number',$number) -> select()[0];
            $this->assign('mess',$point_mess);

            $points =db("point")-> query("select name from point");
            $this->assign('points',$points);
            return $this -> fetch();
        }
        else {
            $param = input('post.');
//            var_dump($param);die();
            //判断信息是否为空
            if(empty($param['emuser'])){ $msg='员工用户名称不能为空'; $this->error($msg); }
            if(empty($param['emposition'])){ $msg='员工职级不能为空'; $this->error($msg); }
            if(empty($param['emname'])){ $msg='员工姓名不能为空'; $this->error($msg); }
            if(empty($param['emtel'])){ $msg='员工电话市不能为空'; $this->error($msg); }
            if(empty($param['emtelbackup'])){ $msg='员工紧急联系人不能为空'; $this->error($msg); }
            if(empty($param['emamail'])){ $msg='员工邮箱不能为空'; $this->error($msg); }
            if(empty($param['emadress'])){ $msg='员工地址不能为空'; $this->error($msg); }
            if(empty($param['selpoint'])){ $msg='员工所属网点不能为空'; $this->error($msg); }

            // 获得该员工的角色
            $role=db("employee")->where('number',$param['number'])->column('role')[0];
            if($role==2){ // 若该员工角色为网点负责人
                if($param['emposition']==2){   // 网点负责人-》网点负责人
                    // 获取提交网点的原先负责人
                    $people = db("point")->where('name',$param['selpoint'])->column("principal")[0];
                    if($people==$param['emname']){ // 提交信息前后网点无变化
                        // 不发生信息修改
                    }else{  // 提交信息后网点信息发生了变化,更新新老网点负责人
                        // 把该员工负责的原有网点负责人改为空
                        db('point')->where('principal',$param['emname'])->update([
                            'principal'=>"选择负责人", 'updatetime'=>date('Y-m-d H:i:s')]);
                        // 把新提交的网点的负责人改为该用户
                        db('point')->where('name',$param['selpoint'])->update([
                            'principal'=>$param['emname'],
                            'updatetime'=>date('Y-m-d H:i:s')]);
                    }
                }else if ($param['emposition']==3){ // 网点负责人=》普通员工
                    // 获取该员工原有负责的网点
                    $point=db('point')->where('principal',$param['emname'])->column('name')[0];
                    if($point!==$param['selpoint']){ // 如果网点发生变化
                        // 把该员工原有负责的网点负责人设置为空
                        db('point')->where('principal',$param['emname'])->update([
                            'principal'=>"选择负责人",'updatetime'=>date('Y-m-d H:i:s')]);
                    }else{ // 如果网点未发生变化
                        // 则把该网点的负责人设置为空
                        db('point')->where('principal',$param['emname'])->update([
                            'principal'=>"选择负责人",'updatetime'=>date('Y-m-d H:i:s')]);
                    }
                }
            }elseif ($role==3){// 若该员工角色为普通员工，修改为网点负责人或者还是普通员工
                if($param['emposition']==2){  // 普通员工-》网点负责人
                    // 获取该员工原来所属的网点
                    $point=db('employee')->where('name',$param['emname'])->select('point')[0];
                    // 获取该员工原来所属网点的负责人
                    $people=db('point')->where('name',$point)->column('principal')[0];
                    // 首先判断网点信息是否发生变化
                    if($point==$param['selpoint']){ // 网点信息未变化
                        if($people=="选择负责人"){  // 所属网点负责人若为空
                            // 把该用户设置为所属网点负责人
                            db('point')->where('name',$point)->update([
                                'principal'=>$param['emname'],'updatetime'=>date('Y-m-d H:i:s')]);
                        }else{ // 所属网点负责人不为空
                            // 把原有网点负责人设置为该网点下的普通员工
                            db('employee')->where('name',$people)->update([
                                'role'=>3,'updatetime'=>date('Y-m-d H:i:s')]);
                            // 把该用户设置为所属网点负责人
                            db('point')->where('name',$point)->update([
                                'principal'=>$param['emname'],'updatetime'=>date('Y-m-d H:i:s')]);
                        }
                    }else{  // 如果网点信息发生了变化
                        // 获取发生变化后的网点负责人
                        $people=db('point')->where('name',$param['selpoint'])->column('principal')[0];
                        if($people=="选择负责人"){  //如果负责人为空
                            // 则更新该用户为新网点负责人
                            db('point')->where('name',$param['selpoint'])->update([
                                'principal'=>$param['emname'],'updatetime'=>date('Y-m-d H:i:s')]);
                        }else{  // 如果负责人不为空
                            // 把原有网点负责人设置为该网点下的普通员工
                            db('employee')->where('name',$people)->update([
                                'role'=>3,'updatetime'=>date('Y-m-d H:i:s')]);
                            // 把该用户设置为新网点负责人
                            db('point')->where('name',$param['selpoint'])->update([
                                'principal'=>$param['emname'],'updatetime'=>date('Y-m-d H:i:s')]);
                        }
                    }
                }else{// 普通员工-》普通员工
                }
            }

            // 在站内信表中插入数据
            // user,修改,员工,所属point,0,0,1,1
            write($this->uname,"修改",$param['emname'],$param['selpoint'],0,0,0,0,1,1);


            //更新数据库信息
            $result = db("employee")->where('number',$param['number'])->update([
                'loginname'=> $param['emuser'],
                'role'=> $param['emposition'],
                'name'=> $param['emname'],
                'phone'=> $param['emtel'],
                'phonebackup' => $param['emtelbackup'],
                'email'=> $param['emamail'],
                'birthday'=> $param['embirth'],
                'address'=> $param['emadress'],
                'point'=> $param['selpoint'],
                'jointime'=> $param['emstarttime'],
                'isStay'=> $param['emisworking'],
                'leavetime'=> $param['emendtime'],
                'updatetime'=>date('Y-m-d H:i:s')
            ]);
            if($result !== false){
                $this->success("网点信息修改成功！",'/tp5/public/admin/employee');
            }else{
                $this->error("网点信息修改失败！",'/tp5/public/admin/employee');
            }

        }
    }

    // 删除员工
    public function deleteemployee()
    {
        $number = Request::instance() ->param("id" , 0);
        // 删除员工时，要修改该员工所负责的网点
        $name = db("employee") -> where('number',$number)->column("name");
        // 在站内信表中插入数据
        // user,删除,员工,所属point,0,0,1,1
        if($this->role==1){// 如果是超级管理员删除员工,main2应该是该员工所在网点
            $main2=db("employee") -> where('number',$number)->column("point")[0];
            write($this->uname,"删除",$name[0],$main2,0,0,0,0,1,1);
        }else{
            write($this->uname,"删除",$name[0],$this->point,0,0,0,0,1,1);
        }

        db("point") -> where('principal',$name[0])-> update([
            "principal"=>"选择负责人"
        ]) ;

        $result = db("employee") -> where('number',$number)-> delete() ;
        if($result){
            $this->success("员工删除成功！",'/tp5/public/admin/employee');
        }else{
            $this->error("员工删除失败！",'/tp5/public/admin/employee');
        }
    }

    // 重置密码
    public function startpw(){
        $number = Request::instance() ->param("id" , 0);
        db("employee")-> where("number",$number)->update([
            'password' => md5('123456')
        ]);

        // 重置谁的密码
        $name=db("employee")-> where("number",$number)->column('name')[0];

        // 在站内信表中插入数据
        // user,重置,员工密码,所属point,0,0,1,1
        write($this->uname,"重置",$name,$this->point,0,0,0,0,1,1);

        return $this->redirect("/tp5/public/admin/employee");
    }
}