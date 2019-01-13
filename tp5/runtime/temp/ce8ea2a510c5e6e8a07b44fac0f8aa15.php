<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/admin/view/index/index.html";i:1528385983;s:83:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/header.html";i:1528378070;s:83:"/Applications/XAMPP/xamppfiles/htdocs/tp5/application/admin/view/public/bottom.html";i:1528385230;}*/ ?>
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
    <div id="page-wrapper" style="height:700px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">仪表数据</h1>
            </div>
            <!-- /.col-lg-12  ,'{admin}','{principal}','{normal}'-->
        </div>
        <?php if($role == 1): ?>
        <form style="float: right;" action="<?php echo url('tp5/public/admin/index/'); ?>" method="post">
            <select style="height: 30px;margin-left: 50px;width: 150px; margin-top: 20px;" name="selpoint" id="selpoint">
                <?php if($keyword == ''): ?>
                <option value="全部" selected>全部</option>
                <?php else: ?>
                <option value="全部">全部</option>
                <?php endif; if(is_array($point_list) || $point_list instanceof \think\Collection || $point_list instanceof \think\Paginator): $i = 0; $__LIST__ = $point_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;if($keyword == $one): ?>
                <option value="<?php echo $one; ?>" selected><?php echo $one; ?></option>
                <?php else: ?>
                <option value="<?php echo $one; ?>"><?php echo $one; ?></option>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <button type="submit" style="height: 30px;width: 50px; margin-top: 10px;">提交</button>
        </form>
        <?php elseif($role == 2): else: endif; ?>
        <!-- -> where("isproexpress","=",0)-->
        <div class="row" style="background-color: #f8f8f8;height: 140px;">
            <table style="width: 80%;margin-left:60px;">
                <tr>
                    <td><h2><?php echo $express_all; ?></h2></td>
                    <td><h2 class="exall"><?php echo $express_ok; ?></h2></td>
                    <td><h2 class="exing"><?php echo $express_ing; ?></h2></td>
                    <td><h2 class="expro"><?php echo $express_ispro; ?></h2></td>
                    <td><h2 class="emall"><?php echo $employee_all; ?></h2></td>
                    <span class="emgao" style="display: none"><?php echo $admin; ?></span>
                    <span class="empoint" style="display: none"><?php echo $principal; ?></span>
                    <span class="em" style="display: none"><?php echo $normal; ?></span>
                    <?php if($role == 1): ?>
                    <td><h2><?php echo $point_all; ?></h2></td>
                    <td><h2><?php echo $money_all; ?></h2> </td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td><span>网点快件总数</span></td>
                    <td><span>已完成快件数</span></td>
                    <td><span>进行中快件数</span></td>
                    <td><span>问题件数</span></td>
                    <td><span>员工总数</span></td>
                    <?php if($role == 1): ?>
                    <td><span>网点总数</span></td>
                    <td><span>总收入¥</span></td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>
        <div style="overflow: auto;margin-top:20px;">
             <div id="container" style="float:left;width:46%;min-width:400px;height:400px"></div>
             <div id="emcontainner" style="float:right;width:46%;min-width:400px;height:400px"></div>
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

<?php echo "<script type='text/javascript'>ok();</script>"; ?>

<?php echo "<script type='text/javascript'>w();</script>"; ?>
