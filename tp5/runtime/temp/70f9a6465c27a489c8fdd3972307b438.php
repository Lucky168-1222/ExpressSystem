<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/opt/lampp/htdocs/tp5/public/../application/admin/view/express/inexpress.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/header.html";i:1529123472;s:63:"/opt/lampp/htdocs/tp5/application/admin/view/public/bottom.html";i:1529051547;}*/ ?>
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
            <h2 class="page-header">快件管理->待接收快件</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form style="float: right" role="form" method="post" action="<?php echo url('express/index'); ?>" name="indexexpress">
                        <?php if($word): ?>
                        <input type="text" style="height: 30px;border-radius: 4px;margin-left: 20px;" name="mess" placeholder="<?php echo $word; ?>"/>
                        <?php else: ?>
                        <input type="text" style="height: 30px;border-radius: 4px;margin-left: 20px;" name="mess" placeholder="编号/人/网点/地址"/>
                        <?php endif; ?>
                        <select name="expressstatus" style="height: 30px;margin-left: 20px;width: 150px;">
                            <?php if($status == 1): ?>
                            <option value="1" selected>出仓</option>
                            <option value="2">派件中</option>
                            <option value="3">已完成</option>
                            <?php elseif($status == 2): ?>
                            <option value="1">出仓</option>
                            <option value="2" selected>派件中</option>
                            <option value="3">已完成</option>
                            <?php elseif($status == 3): ?>
                            <option value="1">出仓</option>
                            <option value="2">派件中</option>
                            <option value="3" selected>已完成</option>
                            <?php else: ?>
                            <option value="1">出仓</option>
                            <option value="2">派件中</option>
                            <option value="3">已完成</option>
                            <?php endif; ?>
                        </select>
                        <input type="submit" class="btn btn-primary" style="padding: 5px; width: 60px;margin-left: 20px;" name="searchemployee" />
                    </form>
                    <a href="/tp5/public/admin/express/addexpress">
                        <button style="float: left; margin-left: 20px;  display: inline-block; margin-top:-5px;" class="btn btn-default">快件揽入</button>
                    </a><br/>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>寄件人</th>
                            <th>收件人</th>
                            <th>寄件网点</th>
                            <th>负责人</th>
                            <th>寄件时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($mess) || $mess instanceof \think\Collection || $mess instanceof \think\Paginator): $i = 0; $__LIST__ = $mess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?>
                        <tr class="odd gradeX">
                            <td><?php echo $one['expressnumber']; ?></td>
                            <td><?php echo $one['postname']; ?></td>
                            <td><?php echo $one['receivename']; ?></td>
                            <td class="center"><?php echo $one['postpoint']; ?></td>
                            <td class="center"><?php echo $one['principalname']; ?></td>
                            <td class="center"><?php echo date('Y/m/d H:m',strtotime($one['posttime'])); ?></td>
                            <td class="center">
                                <button class="btn btn-primary"  onclick="javascript:showchange('<?php echo $one['postname']; ?>','<?php echo $one['postphone']; ?>','<?php echo $one['postaddress']; ?>','<?php echo $one['receivename']; ?>','<?php echo $one['receivephone']; ?>','<?php echo $one['receiveaddress']; ?>','<?php echo $one['price']; ?>','<?php echo $one['principalname']; ?>','<?php echo $one['postpoint']; ?>','<?php echo $one['currentpoint']; ?>','<?php echo $one['nextpoint']; ?>','<?php echo $one['status']; ?>','<?php echo $one['description']; ?>')">详情</button>
                                <a href="/tp5/public/admin/express/rucang?id=<?php echo $one['number']; ?>" style="color: #fff;"><button class="btn btn-warning">入仓</button></a>
                                <a href="/tp5/public/admin/express/back?id=<?php echo $one['number']; ?>" style="color: #fff;"><button class="btn btn-danger">驳回</button></a>
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



</div>
<!-- /#wrapper -->

<!--查看快件信息-->
<div class="modal fade" id="changeModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" action="<?php echo url('express/changeexpress'); ?>" name="changeexpress">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:hidechange()">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        所在网点=><span><?php echo $point; ?></span>
                    </h4>
                </div>
                <input name="number" style="width: 200px;" value="" type="hidden" />
                <div class="modal-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tbody>
                        <!--<tr>-->
                        <!--<td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件单号</td>-->
                        <!--<td style="background: #fff">-->
                        <!--<input name="expressnumber" style="width: 200px;"/>-->
                        <!--</td>-->
                        <!--</tr>-->
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人姓名</td>
                            <td style="background: #fff" class="expostname">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人电话</td>
                            <td style="background: #fff" class="exposttel">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件人地址</td>
                            <td style="background: #fff" class="expostadress">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人姓名</td>
                            <td style="background: #fff" class="exreceivename">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人电话</td>
                            <td style="background: #fff" class="exreceivetel">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件人地址</td>
                            <td style="background: #fff" class="exreceiveadress">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">收件价格</td>
                            <td style="background: #fff" class="exprice">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件负责人</td>
                            <td style="background: #fff" class="exmanager">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">寄件网点</td>
                            <td style="background: #fff" class="expostpoint">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">当前网点</td>
                            <td style="background: #fff" class="expoint">
                            </td>
                        </tr>
                        <!--快件为出仓时才可以显示下一站选择-->
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件下一站</td>
                            <td style="background: #fff" class="exnextpoint">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件状态</td>
                            <td style="background: #fff" class="exstate">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">备注信息</td>
                            <td style="background: #fff">
                                <textarea name="description"  rows="2" cols="50" disabled class="exmessage"></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:hidechange()">关闭
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>


<!--更新中转表-->
<div class="modal fade" id="updateModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" action="<?php echo url('express/changestatus?type=1'); ?>" name="changeexpress">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:hideupdate()">
                        &times;
                    </button>
                    <h4 class="modal-title" >
                        所在网点=><span class="currentnet"><?php echo $point; ?></span>
                    </h4>
                </div>
                <input name="exnumber" id="objnum" style="width: 200px;" type="hidden" />
                <input name="expressnumber" id="objexpnum" style="width: 200px;" type="hidden" />
                <div class="modal-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tbody>
                        <!--快件为出仓时才可以显示下一站选择-->

                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件状态</td>
                            <td style="background: #fff" class="exupdatestatus">
                                <select style="height: 30px;margin-left: 20px;width: 150px;"  name="exupdatestatus">
                                    <option value="0">-请选择快件状态-</option>
                                    <option value="1" selected>已入仓</option>
                                    <option value="2">已出仓</option>
                                    <option value="3">派件中</option>
                                    <option value="4">已完成</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">快件下一站</td>
                            <td style="background: #fff" class="exnextpoint">
                                <select style="height: 30px;margin-left: 20px;width: 150px;" name="expressnextpoint">
                                    <option id="expressnextpoint">-选择下一站-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">是否为问题件</td>
                            <td style="background: #fff">
                                <input name="problem" type="radio" value="1">是
                                <input name="problem" type="radio" style="margin-left: 20px;" value="0" checked>否
                            </td>
                        </tr>
                        <!--<tr>-->
                        <!--<td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">是否为退单</td>-->
                        <!--<td style="background: #fff">-->
                        <!--<input name="back" type="radio" value="1">是-->
                        <!--<input name="back" type="radio" style="margin-left: 20px;" value="0" checked>否-->
                        <!--</td>-->
                        <!--</tr>-->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:hideupdate()">关闭
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div id="exshadow"></div>


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
