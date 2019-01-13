<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"/opt/lampp/htdocs/tp5/public/../application/admin/view/employee/index.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/header.html";i:1529123472;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/bottom.html";i:1529051547;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>速运cyan</title>

    <!-- Bootstrap Core CSS -->
    <link href="/tp5/public/static/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/tp5/public/static/css/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/tp5/public/static/js/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/tp5/public/static/css/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/tp5/public/static/css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="https://static.jianshukeji.com/highcharts/images/favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">速运Cyan</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="" href="/tp5/public/admin/index/news?type=all">
                    <?php echo $messnum; ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope fa-fw"></i><i class="fa "></i>
                </a>
                <!--<ul class="dropdown-menu dropdown-messages">-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>admin</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>2018.06.06 12:00:00</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>AAAAAAAAAAAA</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>thk</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>2018.06.06 12:00:00</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>BBBBBBBBBBBBB</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>cyan</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>2018.06.06 12:00:00</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>CCCCCCCCC</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a class="text-center" href="#">-->
                            <!--<strong><a href="/tp5/public/admin/index/news">Read All</a></strong>-->
                            <!--<i class="fa fa-angle-right"></i>-->
                        <!--</a>-->
                    <!--</li>-->
                <!--</ul>-->
            </li>
            <li class="dropdown">
                <?php if(\think\Cookie::get('username')): ?>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo \think\Cookie::get('username'); ?> |
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <?php else: ?>
                <script>
                    if(window.confirm("是否要重新登录？")){window.location.href="/tp5/public/index/login"}
                    else{window.location.href="/tp5/public/index"}
                </script>
                <?php endif; ?>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/tp5/public/index/user?name=<?php echo \think\Cookie::get('username'); ?>"><i class="fa fa-user fa-fw"></i> 个人信息</a></li>
                    <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>-->
                    <li class="divider"></li>
                    <li><a href="/tp5/public/index/logout"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--<li class="sidebar-search">-->
                    <!--<div class="input-group custom-search-form">-->
                    <!--<input type="text" class="form-control" placeholder="Search...">-->
                    <!--<span class="input-group-btn">-->
                    <!--<button class="btn btn-default" type="button">-->
                    <!--<i class="fa fa-search"></i>-->
                    <!--</button>-->
                    <!--</span>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /input-group &ndash;&gt;-->
                    <!--</li>-->
                    <li>
                        <a href="/tp5/public/admin"><i class="fa fa-dashboard fa-fw"></i> 仪表指示</a>
                    </li>
                    <li>
                        <a href="/tp5/public/admin/company"><i class="fa fa-table fa-fw"></i> 公司信息管理</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 网点管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/tp5/public/admin/point">网点列表</a>
                            </li>
                            <?php if($role == 1): ?>
                            <li>
                                <a href="/tp5/public/admin/point/addpoint">新增网点</a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <a href="/tp5/public/admin/point/stockmanager">库存查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 员工管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/tp5/public/admin/employee">员工列表</a>
                            </li>

                            <li>
                                <a href="/tp5/public/admin/employee/addemployee">新增员工</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> 快件管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/tp5/public/admin/express">现存快件</a>
                            </li>
                            <li>
                            <a href="/tp5/public/admin/express/inexpress">流入快件</a>
                            </li>
                            <li>
                                <a href="/tp5/public/admin/express/all">所有快件</a>
                            </li>
                            <li>
                                <a href="/tp5/public/admin/express/addexpress">新增快件</a>
                            </li>
                            <!--<li>-->
                                <!--<a href="/tp5/public/admin/express/addexpress">退件管理</a>-->
                            <!--</li>-->
                            <li>
                                <a href="/tp5/public/admin/express/ispro">问题件</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">员工管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form style="float: right" role="form" method="post" action="<?php echo url('employee/index'); ?>" name="indexemployeesearch">
                        <?php if($word): ?>
                        <input type="text" style="height: 30px;border-radius: 4px;margin-left: 20px;" name="mess" placeholder="<?php echo $word; ?>"/>
                        <?php else: ?>
                        <input type="text" style="height: 30px;border-radius: 4px;margin-left: 20px;" name="mess" placeholder="编号/姓名/网点"/>
                        <?php endif; ?>
                        <select name="emprole" style="height: 30px;margin-left: 20px;width: 150px;">
                            <?php if($serole == 1): ?>
                            <option value="3">普通员工</option>
                            <option value="2">网点负责人</option>
                            <option value="1" selected>超级管理员</option>
                            <?php elseif($serole == 2): ?>
                            <option value="3">普通员工</option>
                            <option value="2" selected>网点负责人</option>
                            <option value="1">超级管理员</option>
                            <?php else: ?>
                            <option value="3" selected>普通员工</option>
                            <option value="2">网点负责人</option>
                            <option value="1">超级管理员</option>
                            <?php endif; ?>
                        </select>
                        <input type="submit" class="btn btn-primary" style="padding: 5px; width: 60px;margin-left: 20px;" name="searchemployee" />
                    </form>
                    <a href="/tp5/public/admin/employee/addemployee.html">
                        <button style="float: left; margin-left: 20px; display: inline-block; margin-top:-5px;" class="btn btn-default">新增员工</button>
                    </a><br/>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>姓名</th>
                            <th>用户名</th>
                            <th>电话</th>
                            <th>紧急联系电话</th>
                            <th>角色</th>
                            <th>所属网点</th>
                            <th>操   作</th>
                        </tr>
                        </thead>
                        <?php if(is_array($mess) || $mess instanceof \think\Collection || $mess instanceof \think\Paginator): $i = 0; $__LIST__ = $mess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?>
                        <tr class="odd gradeX">
                            <td><?php echo $one['number']; ?></td>
                            <td><?php echo $one['name']; ?></td>
                            <td><?php echo $one['loginname']; ?></td>
                            <td class="center"><?php echo $one['phone']; ?></td>
                            <td class="center"><?php echo $one['phonebackup']; ?></td>
                            <?php if($one['role'] == 1): ?>
                            <td class="center">超级管理员</td>
                            <?php elseif($one['role'] == 2): ?>
                            <td class="center">网点负责人</td>
                            <?php elseif($one['role'] == 3): ?>
                            <td class="center">普通员工</td>
                            <?php endif; if($one['point'] == '选择网点'): ?>
                            <td class="center"></td>
                            <?php else: ?>
                            <td class="center"><?php echo $one['point']; ?></td>
                            <?php endif; ?>
                            <td class="center">
                                <button class="btn btn-primary" data-toggle="modal" onclick="javascript:showlook('<?php echo $one['loginname']; ?>','<?php echo $one['role']; ?>','<?php echo $one['name']; ?>','<?php echo $one['phone']; ?>','<?php echo $one['phonebackup']; ?>','<?php echo $one['email']; ?>','<?php echo $one['birthday']; ?>','<?php echo $one['address']; ?>','<?php echo $one['point']; ?>','<?php echo $one['jointime']; ?>','<?php echo $one['isStay']; ?>','<?php echo $one['leavetime']; ?>','<?php echo $one['updatetime']; ?>')">
                                    查看</button>
                                <?php if($role == 1): ?>
                                <a href="/tp5/public/admin/employee/changeemployee?id=<?php echo $one['number']; ?>" style="color: #fff;"><button class="btn btn-warning">修改</button></a>
                                <button class="btn btn-danger"  onclick="javascript:if(window.confirm('确定删除该员工？')){window.location.href='/tp5/public/admin/employee/deleteemployee?id=<?php echo $one['number']; ?>'} else{}">删除</button>
                                <button class="btn btn-success" onclick="javascript:if(window.confirm('确定初始化密码为123456？')){window.location.href='/tp5/public/admin/employee/startpw?id=<?php echo $one['number']; ?>'} else{}">重置密码</button>
                                <?php elseif($role == 2): if($point == $one['point']): ?>
                                <a href="/tp5/public/admin/employee/changeemployee?id=<?php echo $one['number']; ?>" style="color: #fff;"><button class="btn btn-warning">修改</button></a>
                                <button class="btn btn-danger"  onclick="javascript:if(window.confirm('确定删除该员工？')){window.location.href='/tp5/public/admin/employee/deleteemployee?id=<?php echo $one['number']; ?>'} else{}">删除</button>
                                <button class="btn btn-success" onclick="javascript:if(window.confirm('确定初始化密码为123456？')){window.location.href='/tp5/public/admin/employee/startpw?id=<?php echo $one['number']; ?>'} else{}">重置密码</button>
                                <?php else: ?>
                                <a href="" style="color: #fff;"><button disabled class="btn btn-warning">修改</button></a>
                                <a href="" style="color: #fff;"><button disabled class="btn btn-danger">删除</button></a>
                                <button class="btn btn-success" disabled>重置密码</button>
                                <?php endif; elseif($role == 3): ?>
                                <a href="" style="color: #fff;"><button disabled class="btn btn-warning">修改</button></a>
                                <a href="" style="color: #fff;"><button disabled class="btn btn-danger">删除</button></a>
                                <button class="btn btn-success" disabled>重置密码</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>

<div class="modal fade" id="lookModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:hidelook()">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    员工详情
                </h4>
            </div>
            <div class="modal-body">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <tbody>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工用户名</td>
                        <td style="background: #fff" id="objuser">
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工职级</td>
                        <td style="background: #fff" id="objrole">
                            88
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工姓名</td>
                        <td style="background: #fff" id="objname">
                            11
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工电话</td>
                        <td style="background: #fff" id="objtel">11</td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">紧急联系人</td>
                        <td style="background: #fff" id="objtelback">11</td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工邮箱</td>
                        <td style="background: #fff" id="objemail">
                            33
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工出生年月</td>
                        <td style="background: #fff" id="objbirtime">
                            44
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工住址</td>
                        <td style="background: #fff" id="objadress">
                            55
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工所在网点</td>
                        <td style="background: #fff" id="objpoint">66</td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工入职时间</td>
                        <td style="background: #fff" id="objstarttime">77</td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工在职情况</td>
                        <td style="background: #fff" id="objiswork">
                            88
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">员工离职时间</td>
                        <td style="background: #fff" id="objgotime">
                            88
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:hidelook()">关闭
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>


<div class="modal fade" id="deleteModal" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:hidedel(deleteModal)">
                    &times;
                </button>
                <h4 class="modal-title">
                    删除员工
                </h4>
            </div>
            <div class="modal-body" style="font-size: 16px; text-indent: 2em;line-height: 25px;">
                员工信息已经删除，不可回复！确定删除该员工？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="jacascript:hidedel(deleteModal)">取消
                </button>
                <button type="button" id="delsure" class="btn btn-primary" href="#">
                    确定
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div id="shadow"></div>
</div>
<!-- /#wrapper -->



<!-- jQuery -->
<script src="/tp5/public/static/css/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/tp5/public/static/css/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/tp5/public/static/css/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<!--<script src="/tp5/public/static/css/vendor/raphael/raphael.min.js"></script>-->
<!--<script src="/tp5/public/static/css/vendor/morrisjs/morris.min.js"></script>-->
<!--<script src="/tp5/public/static/js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="/tp5/public/static/js/dist/js/sb-admin-2.js"></script>


<!-- /#wrapper -->
<script src="/tp5/public/static/js/hightcharts.js"></script>
<script src="/tp5/public/static/js/exporting.js"></script>
<script src="/tp5/public/static/js/hightchartscn.js"></script>
<script src="/tp5/public/static/js/drilldown.js"></script>
<script>

    function w(){
        var a=$('.emgao').text();var b=$('.empoint').text();var c=$('.em').text();
    var chat=Highcharts.chart('emcontainner', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'cyan速运员工情况'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: '员工人数'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
            name: 'cyan速运员工',
            colorByPoint: true,
            data: [{
                name: '高层管理',
                y: parseFloat(parseInt(a)/(parseInt(a)+parseInt(b)+parseInt(c))*100)
            }, {
                name: '网点管理人',
                y: parseFloat(parseInt(b)/(parseInt(a)+parseInt(b)+parseInt(c))*100)
            }, {
                name: '普通员工',
                y: parseFloat(parseInt(c)/(parseInt(a)+parseInt(b)+parseInt(c))*100)
            }]
        }]
    });
    }
</script>
<script>
    function ok(){
        var a=$('.exall').text();var b=$('.exing').text();var c=$('.expro').text();
    var chart = Highcharts.chart('container', {
        title: {
            text: 'cyan速运快件情况展示'
        },
        tooltip: {
            headerFormat: '{series.name}<br>',
            pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true // 设置饼图是否在图例中显示
            }
        },
        series: [{
            type: 'pie',
            name: 'cyan速运快件',
            data: [
                ['进行中快件',   parseFloat(parseInt(a)/(parseInt(a)+parseInt(b)+parseInt(c))*100)],
                ['已完成快件',   parseFloat(parseInt(b)/(parseInt(a)+parseInt(b)+parseInt(c))*100)],
                ['问题快件',    parseFloat(parseInt(c)/(parseInt(a)+parseInt(b)+parseInt(c))*100)]
            ]
        }]
    });




    }
</script>


<script src="/tp5/public/static/js/myjs/myjs.js"></script>

</body>

</html>
<script>

</script>