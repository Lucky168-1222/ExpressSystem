<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:98:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/express/addexpress.html";i:1527810893;s:83:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/header.html";i:1527810893;s:83:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/bottom.html";i:1527810893;}*/ ?>
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
                                <a href="/tp5/public/admin/express">快件列表</a>
                            </li>
                            <li>
                            <a href="/tp5/public/admin/express/inexpress">流入快件</a>
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
            <h2 class="page-header">快件管理->录入快件</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="index.html">快件列表</a> >> <a href="#">快件揽入</a>
                </div>
                <form role="form" method="post" action="<?php echo url('express/addexpress'); ?>" name="addexpress">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tbody>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件单号</td>
                            <td style="background: #fff">
                                <input name="expressnumber" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人姓名</td>
                            <td style="background: #fff">
                                <input name="postname" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人电话</td>
                            <td style="background: #fff">
                                <input name="postphone" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人地址</td>
                            <td style="background: #fff">
                                <input name="postaddress" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人姓名</td>
                            <td style="background: #fff">
                                <input name="receivename" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人电话</td>
                            <td style="background: #fff">
                                <input name="receivephone" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人地址</td>
                            <td style="background: #fff">
                                <input name="receiveaddress" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件价格</td>
                            <td style="background: #fff">
                                <input name="price" style="width: 200px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件负责人</td>
                            <td style="background: #fff">
                                <input name="principalname" style="width: 200px;" value="<?php echo $uname; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件网点</td>
                            <td style="background: #fff">
                                <input name="postpoint" id="postpoint" style="width: 200px;" value="<?php echo $point; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">当前网点</td>
                            <td style="background: #fff">
                                <input name="currentpoint" style="width: 200px;" value="<?php echo $point; ?>"/>
                            </td>
                        </tr>
                        <!--快件为出仓时才可以显示下一站选择-->
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件下一站</td>
                            <td style="background: #fff">
                                <select name="nextpoint" id="nextpoint">
                                    <option value="0" selected>-请选择下一站点-</option>
                                    <?php if(is_array($points) || $points instanceof \think\Collection || $points instanceof \think\Paginator): $i = 0; $__LIST__ = $points;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$point): $mod = ($i % 2 );++$i;?>
                                    <option value=<?php echo $point['name']; ?>><?php echo $point['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件状态</td>
                            <td style="background: #fff">
                                <select name="exstatus" id="exstatus">
                                    <option value="0" selected>-请选择快件状态-</option>
                                    <option value="1">已入仓</option>
                                    <option value="2">已出仓</option>
                                    <option value="3">派件中</option>
                                    <option value="4">已完成</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">备注信息</td>
                            <td style="background: #fff">
                                <textarea name="description"  rows="5" cols="50"></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <input type="submit" class="btn btn-success col-sm-2" style="display: inline-block; float: right;margin-top:20px;margin-bottom: 20px; margin-right: 22%" />
                <button class="btn btn-danger col-sm-offset-3 col-sm-2" style="margin-top:20px;margin-bottom: 20px;"><a style="color: #fff;" href="/tp5/public/admin/express/index">取消</a></button>
                <!-- /.panel-body -->
                </form>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>



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
<script>
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
                ['进行中快件',   45.0],
                ['已完成快件',   35.0],
                ['问题快件',    20.0]
            ]
        }]
    });
</script>
<script src="/tp5/public/static/js/drilldown.js"></script>
<script>
    var gaoem=56.33;
    var pointem=24.03;
    var em=10.38;
    Highcharts.chart('emcontainner', {
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
                y: gaoem
            }, {
                name: '网点管理人',
                y: pointem
            }, {
                name: '普通员工',
                y: em
            }]
        }]
    });
</script>

<script src="/tp5/public/static/js/myjs/myjs.js"></script>

</body>

</html>
