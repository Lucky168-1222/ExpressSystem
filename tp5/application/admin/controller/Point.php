<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-15
 * Time: 上午10:47
 */
namespace app\admin\controller;
use app\admin\model\Base;
use think\Request;
use think\Cookie;

class Point extends Base
{
    public function index()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        $request = Request::instance();
        if($request -> isGet()){
            $map['name']  = array('neq','超级网点');  // 查询不等于超级网点的网点
            $point_mess =db("point") -> where($map)->order('createtime desc')-> select();
            $this->assign('mess',$point_mess);
            $this->assign('word',"");
            return $this->fetch();
        }
        else{
            $param = input('post.');
            $value=$param['mess'];
            $result= db("point")->where('number|name|address|principal','like','%'.$value.'%')
                ->order('createtime desc')->select();
            $this->assign('mess',$result);
            $this->assign('word',$value);
            return $this->fetch();
        }
    }

    // 新增网点
    public function addpoint()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet())
        {
            $this->assign('role',$this->role);
            $this->assign('point',$this->point);

            $map['loginname']  = array('neq','admin');  // 查询不等于admin的用户
            $map['role']  = array('eq','2');  // 是网点负责人的用户
            $map['point']  = array('eq','选择网点');  // 是网点负责人的用户
            $pointnames= db("employee")-> where($map)->column('name');
//            var_dump($result);die();

            $this->assign('names',$pointnames);
            return $this -> fetch();
        }
        else
        {
            $param = input('post.');
            //判断信息是否为空
            if(empty($param['pointname'])){ $msg='网点名称不能为空'; $this->error($msg); }
            if(empty($param['pointadress'])){ $msg='网点地址不能为空'; $this->error($msg); }
            if(empty($param['selectptext'])){ $msg='网点所在省不能为空'; $this->error($msg); }
            if(empty($param['selectctext'])){ $msg='网点所在市不能为空'; $this->error($msg); }
            if(empty($param['pointtel'])){ $msg='网点电话不能为空'; $this->error($msg); }
            if(empty($param['pointemail'])){ $msg='网点邮箱不能为空'; $this->error($msg); }


            // 判断网点名称，网点负责人，网点联系电话，网点邮箱是否在数据库中已经存在
            $nameresult= db("point")->where("name",$param['pointname'])->find();
            if($nameresult){$msg='网点名称在数据库中已经存在，请修改!'; $this->error($msg);}
            if($param['pointperson']!==""){
                $personresult= db("point")->where("principal",$param['pointperson'])->find();
                if($personresult){$msg='网点负责人在数据库中已经存在，请修改!'; $this->error($msg);}
            }
            $telresult= db("point")->where("name",$param['pointtel'])->find();
            if($telresult){$msg='网点联系电话在数据库中已经存在，请修改!'; $this->error($msg);}
            $emailresult= db("point")->where("name",$param['pointemail'])->find();
            if($emailresult){$msg='网点联系邮箱在数据库中已经存在，请修改!'; $this->error($msg);}

            # 获取最大的网点编号，保证网点编号递增，不重复
            $max_number = db("point")->order('number', 'DESC')->column('number');
            $new_number = $max_number[0] + 1;

            // 在站内信表中插入数据
            // user,增加,point,所属point,0,0,1,0
            write($this->uname,"增加",$param['pointname'],$param['pointname'],0,0,0,0,1,0);

            $createtime = date("Y-m-d H:i:s");
            $updatetime = date("Y-m-d H:i:s");
            $data = ['number' => $new_number, 'name' => $param['pointname'], 'address' => $param['pointadress'],
                'privince' => $param['selectptext'], 'city' => $param['selectctext'], 'phone' => $param['pointtel'],
                'email' => $param['pointemail'], 'principal' => $param['pointperson'],
                'createtime' => $createtime, 'updatetime' => $updatetime];
            db("point") -> insert($data);

            // 添加网点之后，要更新员工信息
            db("employee")->where('name',$param['pointperson'])->update([
                'point'=> $param['pointname'],
                'role'=>"2",
                'updatetime'=> date('Y-m-d H:i:s')
            ]);

            $this->success("网点添加成功！",'/tp5/public/admin/point');
        }
    }

    // 删除网点
    public function deletepoint()
    {
        $number = Request::instance() ->param("id" , 0);

        // 删除网点时，要删除该网点的所有员工
        $pname = db("point") -> where('number',$number)->column("name");

        // 在站内信表中插入数据
        // user,删除,point,所属point,0,0,1,0
        write($this->uname,"删除",$pname[0],$this->point,0,0,0,0,1,0);


        // 删除网点时先判断该网点下是否还存在快件，如果存在快件，则不能删除
        $expnum=db('express')->where('currentpoint',$pname[0])->count();
        // var_dump($expnum);die();
        if($expnum){
            $this->error("该网点下存在快件，不能删除该网点！",'/tp5/public/admin/point');
        }
        // 删除员工
        db("employee")->where('point',$pname[0]) ->delete();

        $result = db("point") -> where('number',$number)-> delete();
        if($result){
            $this->success("网点删除成功！",'/tp5/public/admin/point');
        }else{
            $this->error("网点删除失败！",'/tp5/public/admin/point');
        }
    }

    // 信息修改
    public function changepoint()
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
            $point_mess = db("point") -> where('number',$number) -> select()[0];
            $this->assign('mess',$point_mess);
            // 获取没有负责网点的网点负责人
            $map['role']  = array('eq','2');  // 是网点负责人的用户
            $map['point']  = array('eq','选择网点');  // 没有负责任何网点
            $pmess1= db("employee")->where($map)->column('name');
            // 获取普通员工
            $map2['role']  = array('eq',3);  // 没有负责任何网点
            $pmess2= db("employee")->where($map2)->column('name');
            $pmess=$pmess1+$pmess2;  // 合并
            $this->assign('names',$pmess);

            return $this -> fetch();
        }
        else {
            $param = input('post.');
//            var_dump($param);die();
            //判断信息是否为空
            if(empty($param['pointname'])){ $msg='网点名称不能为空'; $this->error($msg); }
            if(empty($param['pointadress'])){ $msg='网点地址不能为空'; $this->error($msg); }
            if(empty($param['selectptext'])){ $msg='网点所在省不能为空'; $this->error($msg); }
            if(empty($param['selectctext'])){ $msg='网点所在市不能为空'; $this->error($msg); }
            if(empty($param['pointtel'])){ $msg='网点电话不能为空'; $this->error($msg); }
            if(empty($param['pointemail'])){ $msg='网点邮箱不能为空'; $this->error($msg); }
            if(empty($param['pointperson'])){ $msg='网点负责人不能为空'; $this->error($msg); }

            // 在站内信表中插入数据
            // user,修改,point,所属point,0,0,1,0
            write($this->uname,"修改",$param['pointname'],$this->point,0,0,0,0,1,0);

            //更新数据库信息
            $result = db("point")->where('number',$param['number'])->update([
                'name'=> $param['pointname'],
                'address'=> $param['pointadress'],
                'privince'=> $param['selectptext'],
                'city'=> $param['selectctext'],
                'principal' => $param['pointperson'],
                'phone'=> $param['pointtel'],
                'email'=> $param['pointemail'],
                'updatetime'=> date('Y-m-d H:i:s')
            ]);
            // 同步employee表信息
            db("employee")->where('name',$param['pointperson'])->update([
                'point'=> $param['pointname'],
                'role'=>"2",
                'updatetime'=> date('Y-m-d H:i:s')
            ]);

            if($result !== false){
                $this->success("网点信息修改成功！",'/tp5/public/admin/point');
            }else{
                $this->error("网点信息修改失败！",'/tp5/public/admin/point');
            }

        }
    }

    // 库存管理
    public function stockmanager()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        $request = Request::instance();
        if($request -> isGet()) {
            // 网点名字
            $point_name = db("point")->where('name', $this->point)->column('name'); // 网点名字
            if(!$point_name){
                return redirect("/tp5/public/index/login");
            }
//            var_dump($point_name);die();
            $this->assign('point_name', $point_name[0]);

            // 网点员工总数
            if($this->role ==1 ){
                $peonumber = db('employee')->count();
            }else{
                $peonumber = db('employee')->where('point', $point_name[0])->count();
            }
            $this->assign('pnumber', $peonumber);

            // 当前库存
            if($this->role ==1 ) {
                $express_number = db("express")->count();
            }else{
                $express_number = db("express")->where('currentpoint', $point_name[0])->count();
            }
            $this->assign('expressumber', $express_number);


            // 最大库存
            $maxnumber = db("point")->where('name', $this->point)->column("maxnumber");
            $this->assign('maxnumber',  (string)($maxnumber[0])." 件");

            // 问题件总数
            if($this->role ==1 ) {
                $proexpress_num = db("express")->where('isproexpress', "=",1)->count();
            }else{
                $proexpress_num = db("express")->where('currentpoint', $point_name[0])
                    ->where('isproexpress', "=",0)->count();
            }
            $this->assign('proexpress_num', $proexpress_num);

            return $this->fetch();
        }
        else{
            $param = input('post.');

            // 在站内信表中插入数据
            // user,修改,point库存,所属point,0,0,1,0
            write($this->uname,"修改",$param['pointname']+"库存",$this->point,0,0,0,0,1,0);

            //更新数据库信息
            $result = db("point")->where('name', $this->point)->update(['maxnumber'=> $param['comname']]);

            if($result !== false){
                return redirect("/tp5/public/admin/point/stockmanager");
            }else{
                $this->error("网点最大库存信息修改失败！",'/tp5/public/admin/point/stockmanager');
            }
        }
    }
}