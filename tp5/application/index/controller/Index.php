<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        $request = Request::instance();
        if($request -> isGet()){
            $this->assign('history','get');
            $this->assign('number',"");
            $desc=db("company")->column("description");
            $this->assign('desc',$desc[0]);
            return $this -> fetch();
        }else{
            $param = input('post.');
            $number = $param['number'];
            if(empty($number)){
                $msg="输入单号为空！";$this->error($msg,"/tp5/public/index");
            }
            $history=db('expresshistory')->group('point,status')->where('expressnumber',$number)->order('changetime DESC' )->select();
//            var_dump($history);die();
            $this->assign('history',$history);
            $this->assign('number',$number);
            return $this -> fetch();
        }

    }
}