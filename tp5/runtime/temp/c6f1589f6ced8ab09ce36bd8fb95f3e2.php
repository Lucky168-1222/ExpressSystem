<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/opt/lampp/htdocs/tp5/public/../application/index/view/regeister/index.html";i:1529051547;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎使用速运Cyan</title>
</head>
<link href="/tp5/public/static/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="/tp5/public/static/css/main.css" type="text/css" rel="stylesheet">
<body>
<div class="login">
    <div class="box png" style="background: url();">
        <div class="logo png"></div>
        <form role="form" method="post" action="<?php echo url('regeister/index'); ?>" name="registerform">
            <div class="input">
                <p></p>
                <div class="log" style="box-shadow:5px 5px 5px 5px #ccc;height: 530px;border-radius: 5px;position: fixed;margin-left:165px;background: #CCCCCC;opacity: 0.2;z-index: -99;"></div>
                <div class="log">
                    <div class="name">
                        <label>用户名</label><input  class="loginname" name="loginname"  type="text" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label>姓名</label><input  class="name" name="name"  type="text" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label>电话</label><input  class="phone" name="phone"  type="text" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label style="width: 70px;padding-right:10px;text-align: left;">紧急联系</label><input  class="phonebackup" name="phonebackup"  type="text" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label>邮箱</label><input  class="email" name="email"  type="email" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label style="width: 70px;padding-right:10px;text-align: left;">出生年月</label><input  class="brith" name="birth"  type="date" style="min-width: 230px;"/>
                    </div>
                    <div class="name">
                        <label>住址</label><input  class="address" name="address"  type="text" style="min-width: 230px;"/>
                    </div>
                    <!--<div class="name">-->
                        <!--<label style="width: 70px;padding-right:10px;text-align: left;">入职时间</label><input  class="emtelbackup" name="emtelbackup"  type="text" style="min-width: 230px;"/>-->
                    <!--</div>-->
                    <div class="name">
                        <label>职位</label>
                        <select name="role" id="role" style="height: 28px;width: 150px">
                        <option value="3" selected>普通员工</option>
                        <option value="2">网点负责人</option>
                    </select>
                    </div>
                    <div class="name">
                        <label>网点</label>
                        <select name="point" id="point" style="height: 28px;width: 150px">
                            <?php if(is_array($points) || $points instanceof \think\Collection || $points instanceof \think\Paginator): $i = 0; $__LIST__ = $points;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$point): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $point; ?>"><?php echo $point; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="name">
                        <a href="/tp5/public/index/login"><input type="button" value="返回" class="btn btn-warning" style="margin-right: 70px;margin-left:70px;" /></a>
                        <input type="submit" name="resubmit" value="提交" class="btn btn-success" />
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </form>
    </div>
    <div class="air-balloon ab-1 png"></div>
    <div class="air-balloon ab-2 png"></div>
    <div class="footer"></div>
</div>

<script type="text/javascript" src="/tp5/public/static/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/tp5/public/static/js/fun.base.js"></script>
<script type="text/javascript" src="/tp5/public/static/js/script.js"></script>


<!--[if IE 6]>
<script src="/tp5/public/static/js/DD_belatedPNG.js" type="text/javascript"></script>
<script>DD_belatedPNG.fix('.png')</script>
<![endif]-->

</body>
</html>