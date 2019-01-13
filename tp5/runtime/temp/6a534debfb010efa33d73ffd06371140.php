<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"/opt/lampp/htdocs/tp5/public/../application/admin/view/employee/changeemployee.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/header.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/bottom.html";i:1529051547;}*/ ?>
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
                <a class="dropdown-toggle" data-toggle="" href="/tp5/public/admin/index/news">
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
                    <a href="index.html">员工列表</a> >> <a href="#">修改员工信息</a>
                </div>
                <!-- /.panel-heading -->
                <form role="form" method="post" action="<?php echo url('employee/changeemployee'); ?>" name="addomployeeform">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <tbody>
                            <input type="hidden" value="<?php echo $mess['number']; ?>" name="number" />
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">用户名</td>
                                <td style="background: #fff">
                                    <input  class="emuser" name="emuser"  type="text" style="min-width: 230px;" value="<?php echo $mess['loginname']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">角色</td>
                                <td style="background: #fff">
                                    <select name="emposition" id="emposition"style="height: 28px;width: 150px">
                                        <?php if($role == 1): if($mess['role'] == 1): ?>
                                        <option value=1 selected>超级管理员</option>
                                        <option value=2>网点负责人</option>
                                        <option value=3>普通员工</option>
                                        <?php elseif($mess['role'] == 2): ?>
                                        <option value=1>超级管理员</option>
                                        <option value=2 selected>网点负责人</option>
                                        <option value=3>普通员工</option>
                                        <?php elseif($mess['role'] == 3): ?>
                                        <option value=1>超级管理员</option>
                                        <option value=2>网点负责人</option>
                                        <option value=3 selected>普通员工</option>
                                        <?php endif; elseif($role == 2): if($mess['role'] == 3): ?>
                                        <option value=3 selected>普通员工</option>
                                        <?php elseif($mess['role'] == 2): ?>
                                        <option value=2 selected>网点负责人</option>
                                        <?php else: ?>
                                        <option value=1 selected>超级管理员</option>
                                        <?php endif; endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">姓名</td>
                                <td style="background: #fff">
                                    <input  class="emname" name="emname"  type="text" style="min-width: 230px;" value="<?php echo $mess['name']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">电话</td>
                                <td style="background: #fff"><input  class="emtel" name="emtel"  type="text" style="min-width: 230px;" value="<?php echo $mess['phone']; ?>"/></td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">紧急联系电话</td>
                                <td style="background: #fff"><input  class="emtelbackup" name="emtelbackup"  type="text" style="min-width: 230px;" value="<?php echo $mess['phonebackup']; ?>"/></td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">邮箱</td>
                                <td style="background: #fff">
                                    <input  class="ememail" name="emamail"  type="email" style="min-width: 230px;" value="<?php echo $mess['email']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">出生年月</td>
                                <td style="background: #fff">
                                    <input  class="embrith" name="embirth"  type="date" style="min-width: 230px;" value="<?php echo date('Y-m-d',strtotime($mess['birthday'])); ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">住址</td>
                                <td style="background: #fff">
                                    <input  class="emadress" name="emadress"  type="text" style="min-width: 230px;" value="<?php echo $mess['address']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">所在网点</td>
                                <td style="background: #fff">
                                    <select name="selpoint" id="selpoint" style="height: 28px;width: 150px">
                                        <?php if($role == 1): ?>
                                        <option value="选择网点">选择网点</option>
                                        <?php if(is_array($points) || $points instanceof \think\Collection || $points instanceof \think\Paginator): $i = 0; $__LIST__ = $points;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p1): $mod = ($i % 2 );++$i;if($p1['name'] == $mess['point']): ?>
                                        <option value=<?php echo $p1['name']; ?> selected><?php echo $p1['name']; ?></option>
                                        <?php else: ?>
                                        <option value=<?php echo $p1['name']; ?>><?php echo $p1['name']; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; elseif($role == 2): ?>
                                        <option value=<?php echo $point; ?> selected><?php echo $point; ?></option>
                                        <?php endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">入职时间</td>
                                <td style="background: #fff">
                                    <input  class="emstarttime" name="emstarttime"  type="date" style="min-width: 230px;" value="<?php echo date('Y-m-d',strtotime($mess['jointime'])); ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">在职情况</td>
                                <td style="background: #fff">
                                    <?php if($mess['isStay'] == 1): ?>
                                    <input  value="1" name="emisworking"  type="radio" checked/>是  &nbsp;&nbsp;
                                    <input  value="0" name="emisworking"  type="radio"/>否
                                    <?php else: ?>
                                    <input  value="1" name="emisworking"  type="radio" />是  &nbsp;&nbsp;
                                    <input  value="0" name="emisworking"  type="radio" checked/>否
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">离职时间</td>
                                <td style="background: #fff">
                                    <input  class="emendtime" name="emendtime"  type="date" style="min-width: 230px;" value="<?php echo date('Y-m-d',strtotime($mess['leavetime'])); ?>"/>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                    <input type="submit" class="btn btn-success col-sm-2" style="display: inline-block; float: right;margin-top:20px;margin-bottom: 20px; margin-right: 22%" />
                </form>
                <button class="btn btn-danger col-sm-offset-3 col-sm-2" style="margin-top:20px;margin-bottom: 20px;"><a style="color: #fff;" href="/tp5/public/admin/employee/index">取消</a></button>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>



</div>



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
