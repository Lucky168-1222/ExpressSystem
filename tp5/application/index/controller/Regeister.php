<?php
/**
 * Created by PhpStorm.
 * User: thinkgamer
 * Date: 18-5-23
 * Time: 下午11:37
 */
namespace app\index\controller;
use think\Controller;
use think\Request;

class Regeister extends Controller
{
    public function index()
    {
        $request = Request::instance();
        if($request -> isGet()) {
            // 获取数据库中的所有网点
            $map['name'] = array("neq","超级网点");
            $points=db('point')->where($map)->column('name');
            $this->assign('points',$points);
            return $this -> fetch();
        }
        else{
            $param = input('post.');

            if(empty($param['loginname'])){$msg="员工登录用户名不能为空!";$this->error($msg);}
            if(empty($param['name'])){$msg="员工姓名不能为空!";$this->error($msg);}
            if(empty($param['phone'])){$msg="员工电话不能为空!";$this->error($msg);}
            if(empty($param['phonebackup'])){$msg="员工紧急联系人不能为空!";$this->error($msg);}
            if(empty($param['email'])){$msg="员工邮箱不能为空!";$this->error($msg);}
            if(empty($param['birth'])){$msg="员工生日不能为空!";$this->error($msg);}
            if(empty($param['address'])){$msg="员工住址不能为空!";$this->error($msg);}
//            var_dump($param);die();

            // 对员工角色进行判断，若是网点负责人，判断对应网点是否已经存在负责人
            if($param["role"]==2){
                $people=db("point")->where('name',$param['point'])->column("principal")(0);
                if($people!=="选择负责人"){$msg="该网点已经存在负责人，请修改角色或者所属网点！有译文请联系管理员admin@suyun.com!";$this->error($msg);}
            }

            // 判断该用户是否已经在数据库中存在
            if(db('employee')->where('loginname',$param['loginname'])->find()){
                $msg="该用户名在数据库中已经存在，请勿重复提交，或者请修改用户名！";
                $this->error($msg);
            }

            # 获取最大的员工编号，保证员工编号递增，不重复
            $max_number = db("employee")->order('number', 'DESC')->column('number');
            $new_number = $max_number[0] + 1;

            # 员工入职时间，如果传进来的参数为空，则自动获取系统当前时间为jointime
            $createtime = empty($param['emstarttime']) ? date("Y-m-d H:i:s") :$param['emstarttime'];
            $updatetime = date("Y-m-d H:i:s");
            $passwd = "123456";      # 初始化密码

            // 在站内信表中插入数据
            // loginname 注册 _ point
            write($param['loginname'],"注册","",$param['point'],1,0,0,0,1,0);

            # 对员工角色做转化
            $data = ['number'=>$new_number,'loginname'=>$param['loginname'],'password'=>md5($passwd),
                'name' => $param['name'], 'phone'=>$param['phone'],'phonebackup'=>$param['phonebackup'],
                'email'=>$param['email'], 'birthday'=>$param['birth'],'address'=>$param['address'],
                'point'=>$param['point'], 'jointime'=>$createtime,'isStay'=>1,'role'=>$param['role'],
                'updatetime' => $updatetime, 'isformal' => 0];
            db("employee") -> insert($data);

            $this->success('信息提交成功，等待管理员通过！','/tp5/public/index/login');
        }
    }
}