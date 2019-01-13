<?php
/**
 * Created by PhpStorm.
 * User: thinkgamer
 * Date: 18-5-28
 * Time: 下午11:54
 */


function write($main1="",$action="",$main2="",$point="",$is_operation=0,$is_see_role1=0,$is_see_role2=0,$is_see_role3=0,$has_permission_point=0,$has_permission_people=0)
{
    // 获取当前日期
    $updatetime = date("Y-m-d H:i:s");
    $data=[
        "main1"=>$main1,"action"=>$action,"main2"=>$main2,"point"=>$point,"is_operation"=>$is_operation,"is_see_role1"=>$is_see_role1,
        "is_see_role2"=>$is_see_role2,"is_see_role3"=>$is_see_role3,
        "has_permission_point"=>$has_permission_point,"has_permission_people"=>$has_permission_people,"time"=>$updatetime
    ];
    db('news')->insert($data);
    return 1;
}
