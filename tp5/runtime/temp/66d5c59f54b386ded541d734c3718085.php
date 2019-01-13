<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/opt/lampp/htdocs/tp5/public/../application/index/view/user/index.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/index/view/public/header.html";i:1529051547;s:63:"/opt/lampp/htdocs/tp5/application/index/view/public/bottom.html";i:1529051547;}*/ ?>
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
            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
            <!--<span class="sr-only">Toggle navigation</span>-->
            <!--<span class="icon-bar"></span>-->
            <!--<span class="icon-bar"></span>-->
            <!--<span class="icon-bar"></span>-->
            <!--</button>-->
            <a class="navbar-brand" href="index.html">速运Cyan</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <a class="dropdown-toggle" data-toggle="" href="/tp5/public/admin/index/news">
                <?php echo $messnum; ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope fa-fw"></i><i class="fa "></i>
            </a>
            <!--<li class="dropdown">-->
                <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
                    <!--<i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>-->
                <!--</a>-->
                <!--<ul class="dropdown-menu dropdown-messages">-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>John Smith</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>Yesterday</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>John Smith</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>Yesterday</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div>-->
                                <!--<strong>John Smith</strong>-->
                                <!--<span class="pull-right text-muted">-->
                                        <!--<em>Yesterday</em>-->
                                    <!--</span>-->
                            <!--</div>-->
                            <!--<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li>-->
                        <!--<a class="text-center" href="#">-->
                            <!--<strong>Read All Messages</strong>-->
                            <!--<i class="fa fa-angle-right"></i>-->
                        <!--</a>-->
                    <!--</li>-->
                <!--</ul>-->
                <!--&lt;!&ndash; /.dropdown-messages &ndash;&gt;-->
            <!--</li>-->
            <!-- /.dropdown -->
            <li class="dropdown">
                <?php if(\think\Cookie::get('username')): ?>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo \think\Cookie::get('username'); ?> |
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
                            <li>
                                <a href="/tp5/public/admin/point/addpoint">新增网点</a>
                            </li>
                            <li>
                                <a href="/tp5/public/admin/point/stockmanager">库存管理</a>
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
                                <a href="/tp5/public/admin/express/addexpress">问题件</a>
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
            <h1 class="page-header">个人信息</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button class="btn btn-primary col-sm-1" id="changepwd" onclick="javascript:showchangepwd()" style="float: right;margin-right:40px;height: 40px;">修改密码</button>
                    <br/><br/>
                </div>
                <!-- /.panel-heading -->
                <form role="form" action="<?php echo url('user/index'); ?>" method="post">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tbody>
                            <input type="hidden" value="<?php echo $mess['number']; ?>" name="number"/>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">姓名</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="username" name="name" disabled type="text"  value="<?php echo $mess['name']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">电话</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="userphone" name="phone" disabled type="text"  value="<?php echo $mess['phone']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">角色</td>
                                <td style="background: #fff">
                                    <?php if($mess['role'] == 1): ?>
                                    <input style="border:0;" class="role" name="role" disabled type="text"  placeholder="超级管理员"/>
                                    <?php elseif($mess['role'] == 2): ?>
                                    <input style="border:0;" class="role" name="role" disabled type="text"  placeholder="网点负责人"/>
                                    <?php elseif($mess['role'] == 3): ?>
                                    <input style="border:0;" class="role" name="role" disabled type="text"  placeholder="普通员工"/>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">生日</td>
                                <td style="background: #fff">
                                    <input style="border:0;" disabled type="text" class="birthday" name="birthday"  value="<?php echo $mess['birthday']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">邮箱</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="email" name="email" disabled type="text"  value="<?php echo $mess['email']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">住址</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="address" name="address" disabled type="text"  value="<?php echo $mess['address']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">所属网点</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="point" name="point" disabled type="text"  value="<?php echo $mess['point']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">入职时间</td>
                                <td style="background: #fff">
                                    <input style="border:0;" disabled type="text" class="jointime" name="jointime" placeholder="<?php echo $mess['jointime']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">紧急联系电话</td>
                                <td style="background: #fff">
                                    <input style="border:0;" class="phonebackup" name="phonebackup" disabled type="text"  value="<?php echo $mess['phonebackup']; ?>"/>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                    <input type="submit" class="btn btn-success col-sm-offset-3 col-sm-2" id="saveuser" style="margin-top:20px;margin-bottom: 20px; display: none " />
                </form>
                <?php if($mess['role'] == 1): ?>
                <button class="btn btn-warning col-sm-offset-3 col-sm-3" id="userchange" style="margin-top:20px;margin-bottom: 20px;">修改</button>
                <?php else: ?>
                <button class="btn btn-warning col-sm-offset-3 col-sm-3"  style="margin-top:20px;margin-bottom: 20px;" disabled>如需修改，请联系管理员</button>
                <?php endif; ?>
                <button class="btn btn-primary col-sm-2" id="canceluser" style="margin-left: 40px;margin-top:20px;margin-bottom: 20px; display: none">取消</button>
            </div>

            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>



</div>
<!-- /#wrapper -->

<div class="modal fade" id="changeword"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:hidechangepwd()">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    员工详情
                </h4>
            </div>
            <form role="form" action="<?php echo url('user/changepasswd'); ?>" method="post">
                <div class="modal-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tbody>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">原密码</td>
                            <td style="background: #fff" >
                                <input name="oldpwd" type="password">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">新密码</td>
                            <td style="background: #fff">
                                <input name="newpwd" type="password">
                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f5f5f5; width:30%;color: #337ab7; font-weight:600;">确认密码</td>
                            <td style="background: #fff">
                                <input name="renewspwd" type="password">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:hidechangepwd()">取消</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div id="usershadow"></div>

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

<script src="/tp5/public/static/js/myjs/myjs.js"></script>

</body>

</html>
