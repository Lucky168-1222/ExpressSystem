<?php
/**
 * Created by PhpStorm.
 * user: thinkgamer
 * Date: 18-4-15
 * Time: 上午10:47
 */
namespace app\admin\controller;
use app\admin\model\Base;
use think\Cookie;

class Company extends Base
{
    public function index()
    {
        $this->assign('role',$this->role);
        // 获取公司信息在前端展示
        $company_mess =db("company") -> find();
        $this->assign('mess',$company_mess);
        $this->assign('msg',"");
        $this->assign('messnum',$this->messnum);  // 站内信显示的数目
//        var_dump($company_mess);die();
        return $this->fetch();
    }

    // 更改数据库信息
    public function changeMess()
    {
        $param = input('post.');
//        var_dump($param);die();

        // comname,comadress,comperson,comtel,comemail,comdesc
        if(empty($param['comname'])){
            $msg='公司名称不能为空';
        }
        if(empty($param['comadress'])){
            $msg='公司所在地不能为空';
        }
        if(empty($param['comperson'])){
            //$this->error('公司负责人不能为空');
            $msg='公司负责人不能为空';
        }
        if(empty($param['comtel'])){
            $msg='公司联系电话不能为空';
        }
        if(empty($param['comemail'])){
            $msg='公司邮箱不能为空';
        }
        if(empty($param['comdesc'])){
            $msg='公司简介不能为空';
        }

        //更新数据库信息
        $result = db("company")->where('number',$param['number'])->update([
            'name'=> $param['comname'],
            'inaddress'=> $param['comadress'],
            'principal' => $param['comperson'],
            'phone'=> $param['comtel'],
            'email'=> $param['comemail'],
            'description'=> $param['comdesc'],
            'updatetime'=>date('Y-m-d H:i:s')
        ]);

        if($result !== false){
            $msg = '公司信息更新成功！';
        }else{
            $msg = '公司信息更新失败！';
        }
        $this->assign("msg",$msg);
        $this->redirect(url('/admin/company'));
    }
}