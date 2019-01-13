<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-15
 * Time: 上午10:49
 */
namespace app\admin\controller;
use app\admin\model\Base;
use think\Request;


class Express extends Base
{
    // 现存快件
    public function index()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 获取所有网点
        $points =db("point")-> query("select name from point");
        $pointstr = "";
        for($i=0;$i<count($points);$i++){
            $pointstr.=$points[$i]["name"]."-";
        }
        $this->assign('points',$pointstr);

        $request = Request::instance();
        if($request -> isGet()){
            // 快件信息 如果是超管，看到的应该是所有的快件信息,如果不是超管只能看到 下一站网点为当前用户登录网点的快件
            if($this->role == 1){
                $express_mess =db("express")->where('isproexpress',0)->order('posttime desc') -> select();
            }
            else{
                $express_mess =db("express")-> where('currentpoint',$this->point) ->where('isproexpress',0)
                    ->order('posttime desc')-> select();
            }
            $this->assign('mess',$express_mess);
            // 记录搜索信息
            $this->assign('word',"");
            $this->assign('status',"");
            return $this->fetch();
        }
        else{  // post为搜索，满足的也是当为超管角色时，在所有的快件中进行搜搜，反之，在下一站网点为当前用户所属的网点的快件
            $param = input('post.');
            $value=$param['mess'];
            $status=$param['expressstatus'];
            if($this->role == 1) {
                $result= db("express")->where('number|expressnumber|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }else{
                $result= db("express")->where('number|expressnumber|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)
//                    ->where('nextpoint',$this->point)
                    ->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }

            $this->assign('mess',$result);
            $this->assign('word',$value);
            $this->assign('status',$status);
            return $this->fetch();
        }
    }

    // 所有快件
    public function all()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 获取所有网点
        $points =db("point")-> query("select name from point");
        $pointstr = "";
        for($i=0;$i<count($points);$i++){
            $pointstr.=$points[$i]["name"]."-";
        }
        $this->assign('points',$pointstr);

        $request = Request::instance();
        if($request -> isGet()){
            // 快件信息 如果是超管，看到的应该是所有的快件信息,如果不是超管只能看到 下一站网点为当前用户登录网点的快件
            if($this->role == 1){
                $express_mess =db("express")->where('isproexpress',0)->order('posttime desc') -> select();
            }
            else{
                // 从快件流转表中获取所有point为当前网点的快件
                $points = db('expresshistory')->group('expressnumber')->where('point',$this->point)->column('expressnumber');
//                var_dump($points);die();
                $express_mess =db("express")-> where('expressnumber','in',$points) ->where('isproexpress',0)
                    ->order('posttime desc')-> select();
            }
            $this->assign('mess',$express_mess);
            // 记录搜索信息
            $this->assign('word',"");
            $this->assign('status',"");
            return $this->fetch();
        }
        else{  // post为搜索，满足的也是当为超管角色时，在所有的快件中进行搜搜，反之，在下一站网点为当前用户所属的网点的快件
            $param = input('post.');
            $value=$param['mess'];
            $status=$param['expressstatus'];
            // 从快件流转表中获取所有point为当前网点的快件
            $points = db('expresshistory')->group('expressnumber')->where('point',$this->point)->column('expressnumber');
            if($this->role == 1) {
                $result= db("express")->where('expressnumber','in',$points)
                    ->where('number|expressnumber|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }else{
                $result= db("express")->where('expressnumber','in',$points)
                    ->where('number|expressnumber|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)
//                    ->where('nextpoint',$this->point)
                    ->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }

            $this->assign('mess',$result);
            $this->assign('word',$value);
            $this->assign('status',$status);
            return $this->fetch();
        }
    }

    // 新增快件
    public function addexpress()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('uname',$this->uname);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet())
        {
            // 获取所有的网点名称
            $points =db("point")-> query("select name from point");
            $this->assign('points',$points);
            return $this -> fetch();
        }
        else
        {
            $param = input('post.');
//            var_dump($param);die();
            //判断信息是否为空
            if(empty($param['expressnumber'])){ $msg='快件编号不能为空'; $this->error($msg); }
            if(empty($param['postname'])){ $msg='寄件人姓名不能为空'; $this->error($msg); }
            if(empty($param['postphone'])){ $msg='寄件人电话不能为空'; $this->error($msg); }
            if(empty($param['postaddress'])){ $msg='寄件人地址不能为空'; $this->error($msg); }
            if(empty($param['receivename'])){ $msg='收件人姓名不能为空'; $this->error($msg); }
            if(empty($param['receivephone'])){ $msg='收件人电话不能为空'; $this->error($msg); }
            if(empty($param['receiveaddress'])){ $msg='收件人地址不能为空'; $this->error($msg); }
            if(empty($param['exstatus'])){ $msg='快件状态不能为空'; $this->error($msg); }
            if(empty($param['nextpoint'])){ $msg='下一站网点不能为空'; $this->error($msg); }

            // 判断快件单号在数据库中是否存在
            $sear_en=db('express')->where('expressnumber',$param['expressnumber'])->find();
            if($sear_en){$msg='快递单号在数据库中已存在'; $this->error($msg);}

            // 在站内信表中插入数据
            // user,增加,point,所属point,0,0,1,0
            write($this->uname,"增加",$param['expressnumber'],$param['currentpoint'],0,0,0,0,1,0);

            # 获取最大的快件编号，保证快件编号递增，不重复
            try{
                $max_number = db("express")->order('number', 'DESC')->column('number');
                $new_number = $max_number[0] + 1;
            }catch(\Exception $e){
                $new_number = 1000;
            }
            # 寄件时间 和快件信息更新时间
            $posttime = date("Y-m-d H:i:s");
            $updatetime = date("Y-m-d H:i:s");
            # 存入数据库
            $data = ['number'=>$new_number,'expressnumber'=>$param['expressnumber'],'postaddress'=>$param['postaddress'],
                'receiveaddress' => $param['receiveaddress'],'postname' => $param['postname'],'receivename'=>$param['receivename'],
                'postphone'=>$param['postphone'],'receivephone'=>$param['receivephone'],'postpoint'=>$param['postpoint'],
                'nextpoint'=>$param['nextpoint'],'posttime'=>$posttime,'changetime'=>$updatetime,
                'principalname'=>$param['principalname'],'price' => $param['price'],'status'=>$param['exstatus'],
                'description'=>$param['description'],'currentpoint' => $param['currentpoint']];
            db("express") -> insert($data);

            // 历史中转表中记录一条信息
            $history = ['number'=>$new_number,'expressnumber'=>$param['expressnumber'],
                'point'=>$param['currentpoint'],'status' => $param['exstatus'],
                'changetime' => $updatetime,'employee'=>$param['principalname']];
            db("expresshistory") -> insert($history);

            $this->success("快件添加成功！",'/tp5/public/admin/express');
        }
    }

    // 修改快件信息
    public function changeexpress()
    {
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 判断请求方式
        $request = Request::instance();
        if($request -> isGet()){
            $number = Request::instance() ->param("id" , 0);
            $result = db("express") -> where('number',$number)->order('changetime')-> find() ;
            $this->assign('mess',$result);

            // 获取所有网点
            $point_mess = db("point") ->column("name");
            $this->assign('points',$point_mess);
            return $this -> fetch();

        }
        else
        {
           $param = input('post.');
            //判断信息是否为空
            if(empty($param['expressnumber'])){ $msg='快件编号不能为空'; $this->error($msg); }
            if(empty($param['postname'])){ $msg='寄件人姓名不能为空'; $this->error($msg); }
            if(empty($param['postphone'])){ $msg='寄件人电话不能为空'; $this->error($msg); }
            if(empty($param['postaddress'])){ $msg='寄件人地址不能为空'; $this->error($msg); }
            if(empty($param['receivename'])){ $msg='收件人姓名不能为空'; $this->error($msg); }
            if(empty($param['receivephone'])){ $msg='收件人电话不能为空'; $this->error($msg); }
            if(empty($param['receiveaddress'])){ $msg='收件人地址不能为空'; $this->error($msg); }
            if(empty($param['exstatus'])){ $msg='快件状态不能为空'; $this->error($msg); }

            # 获取最大的快件编号，保证快件编号递增，不重复
            try{
                $max_number = db("express")->order('number', 'DESC')->column('number');
                $new_number = $max_number[0] + 1;
            }catch(\Exception $e){
                $new_number = 1000;
            }
            # 寄件时间 和快件信息更新时间
            $updatetime = date("Y-m-d H:i:s");

            write($this->uname,"修改",$param['expressnumber'],$param['currentpoint'],0,0,0,0,1,0);


            # 更新数据库
            $result = db("express")->where('number',$param['expressnumber'])->update([
                'postaddress'=>$param['postaddress'],
                'receiveaddress' => $param['receiveaddress'],'postname' => $param['postname'],'receivename'=>$param['receivename'],
                'postphone'=>$param['postphone'],'receivephone'=>$param['receivephone'],'postpoint'=>$param['postpoint'],
                'nextpoint'=>$param['nextpoint'],'changetime'=>$updatetime,
                'principalname'=>$param['principalname'],'price' => $param['price'],'status'=>$param['exstatus'],
                'description'=>$param['description'],'currentpoint' => $param['currentpoint']
            ]);
            $this->success("快件信息更新成功！",'/tp5/public/admin/express');
        }
    }

    // 更改快件状态
    public function changestatus(){
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('uname',$this->uname);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        $param = input('post.');
        $changetime = date("Y-m-d H:i:s");

        $type = Request::instance() ->param("type" , 0);

        // 获取最大的快件编号，保证快件编号递增，不重复
        try{
            $max_number = db("expresshistory")->order('number', 'DESC')->column('number');
            $new_number = $max_number[0] + 1;
        }catch(Exception $e){
            $new_number = 1000;
        }

        if($type==1){ //表示从index 过来的
            // 根据快件单号获取快件信息，然后更新
            $nextp=db("express") -> where('number',$param['exnumber'])->column('nextpoint');

            // 如果是更新为问题件，这只修改问题件字段信息，别的不修改
            if($param['problem']==1){
                db("express") -> where('number',$param['exnumber'])->update([
                    'isproexpress'=>$param['problem'],
                    'changetime'=>$changetime,
                    'currentpoint'=>$this->point
                ]);
                $this->redirect('/tp5/public/admin/express');
            }else{
                db("express") -> where('number',$param['exnumber'])->update([
                    'nextpoint'=>$param['expressnextpoint'],
                    'status'=>$param['exupdatestatus'],
                    'isproexpress'=>$param['problem'],
                    'currentpoint'=>$nextp,
                    'changetime'=>$changetime
                ]);

                // 快件流转信息表插入一条信息
                $data = ['number'=>$new_number,'expressnumber'=>$param['expressnumber'],'point'=>$this->point,
                    'status' => $param['exupdatestatus'],'changetime' => $changetime,'employee'=>$this->uname];
                db("expresshistory") -> insert($data);
                $this->redirect('/tp5/public/admin/express');
            }
        }
        else{
            // 根据快件单号获取快件信息，然后更新
            db("express") -> where('number',$param['exnumber'])->update([
                'isproexpress'=>$param['problem'],
                'changetime'=>$changetime
            ]);

            $this->redirect('/tp5/public/admin/express/ispro');
        }
    }

    // 删除快件
    public function deleteexpress()
    {
        $number = Request::instance() ->param("id" , 0);

        $express=db("express") -> where('number',$number)->find();
//        var_dump($express);die();
        write($this->uname,"删除",$express["expressnumber"],$express["currentpoint"],0,0,0,0,1,0);

        $result = db("express") -> where('number',$number)-> delete() ;

        // 删除快件时，删除流转表中的流转信息
        db("expresshistory") -> where('number',$number)-> delete() ;

        if($result){
            $this->success("快件删除成功！",'/tp5/public/admin/express');
        }else{
            $this->error("快件删除失败！",'/tp5/public/admin/express');
        }
    }

    // 问题件
    public function ispro(){
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 获取所有网点
        $points =db("point")-> query("select name from point");
        $pointstr = "";
        for($i=0;$i<count($points);$i++){
            $pointstr.=$points[$i]["name"]."-";
        }
        $this->assign('points',$pointstr);

        $request = Request::instance();
        if($request -> isGet()){
            // 快件信息
            $express_mess =db("express")
                -> where('currentpoint',$this->point)
                -> where('isproexpress',true)
                ->order('posttime desc')-> select();
            $this->assign('mess',$express_mess);

            $this->assign('word',"");
            $this->assign('status',"");
            return $this->fetch();
        }
        else{
            $param = input('post.');
            $value=$param['mess'];
            $status=$param['expressstatus'];
            $result= db("express")
                ->where('number|number|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                ->where('status','eq',$status)
//                -> where('currentpoint',$this->point)
                ->where('isproexpress','eq',1)
                ->order('posttime desc')->select();
            $this->assign('mess',$result);
            $this->assign('word',$value);
            $this->assign('status',$status);
            return $this->fetch();
        }
    }

    // 流入快件
    public function inexpress(){
        $this->assign('role',$this->role);
        $this->assign('point',$this->point);
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目

        // 获取所有网点
        $points =db("point")-> query("select name from point");
        $pointstr = "";
        for($i=0;$i<count($points);$i++){
            $pointstr.=$points[$i]["name"]."-";
        }
        $this->assign('points',$pointstr);

        $request = Request::instance();
        if($request -> isGet()){
            // 快件信息 如果是超管，看到的应该是流入的所有快件信息,如果不是超管只能看到 下一站网点为当前用户登录网点的快件
            if($this->role == 1){
                $express_mess =db("express")->where('isproexpress',0)->order('posttime desc')-> select();
            }
            else{
                $express_mess =db("express")-> where('nextpoint',$this->point) ->where('isproexpress',0)
                    ->order('posttime desc') -> select();
            }
            $this->assign('mess',$express_mess);
            // 记录搜索信息
            $this->assign('word',"");
            $this->assign('status',"");
            return $this->fetch();
        }
        else{  // post为搜索，满足的也是当为超管角色时，在所有的快件中进行搜搜，反之，在下一站网点为当前用户所属的网点的快件
            $param = input('post.');
            $value=$param['mess'];
            $status=$param['expressstatus'];
            if($this->role == 1) {
                $result= db("express")->where('number|number|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }else{
                $result= db("express")->where('number|number|postname|receivename|postpoint|nextpoint','like','%'.$value.'%')
                    ->where('status','eq',$status)
//                    -> where('nextpoint',$this->point)
                    ->where('isproexpress','eq',0)
                    ->order('posttime desc')->select();
            }

            $this->assign('mess',$result);
            $this->assign('word',$value);
            $this->assign('status',$status);
            return $this->fetch();
        }
    }

    // 流入快件的入仓 处理（将快件的当前网点改为用户登录的网点）
        public function rucang(){
            $updatetime = date("Y-m-d H:i:s");
        $number = Request::instance() ->param("id" , 0);

        // 写入news表
        $express=db("express") -> where('number',$number)->find();
        write($this->uname,"入仓",$express["expressnumber"],$express["currentpoint"],0,0,0,0,1,0);

        db('express')->where('number',$number)->update([
            'nextpoint'=>"",
            'currentpoint'=>$this->point,
            'principalname'=>$this->uname,
            'changetime'=>$updatetime
            ]);

        // 入仓时在快件流转表中添加一条记录
        // 获取最大的快件编号，保证快件编号递增，不重复
        try{
            $max_number = db("expresshistory")->order('number', 'DESC')->column('number');
            $new_number = $max_number[0] + 1;
        }catch(Exception $e){
            $new_number = 1000;
        }
        $express=db('express')->where('number',$number)->find();
        $history = ['number'=>$new_number,'expressnumber'=>$express['expressnumber'],
            'point'=>$express['currentpoint'],'status' => $express['status'],
            'changetime' => $updatetime,'employee'=>$this->uname];
        db("expresshistory") -> insert($history);
        $this->redirect('/tp5/public/admin/express/index');
    }

    // 流入快件驳回, 将快件的下一站置为空
    public function back()
    {
        $updatetime = date("Y-m-d H:i:s");
        $number = Request::instance() ->param("id" , 0);
        // 写入news表
        $express=db("express") -> where('number',$number)->find();
        write($this->uname,"驳回",$express["expressnumber"],$express["currentpoint"],0,0,0,0,1,0);
        db('express')->where('number',$number)->update([
            'nextpoint'=>"",
            'changetime'=>$updatetime
        ]);

        $this->redirect('/tp5/public/admin/express/index');
    }
}