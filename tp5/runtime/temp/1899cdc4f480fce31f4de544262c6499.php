<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/index/view/login/index.html";i:1528378070;}*/ ?>
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
    <div class="box png">
        <div class="logo png"></div>
        <form role="form" action="<?php echo url('login/dologin'); ?>" method="post">
            <div class="input">
                <div class="log">
                    <div class="name">
                        <label>用户名</label><input type="text" class="text" placeholder="用户名" name="username" id="username" tabindex="1">
                    </div>
                    <div class="pwd">
                        <label>密　码</label><input type="password" class="text" name="userpwd" id="pwd" placeholder="密码" tabindex="2">
                        <div class="forgetpwd" >
                            <label style="float: left;width: 100px; margin-left: 0px;margin-top: 10px;">
                                <a href="/tp5/public/index">返回首页</a>
                            </label>
                        <label style="float: right;width: 100px; margin-right: 50px;margin-top: 10px;">
                        <a href="/tp5/public/index/forget">忘记密码？</a>
                        </label>
                        </div>
                        <a href="/tp5/public/index/regeister"><input type="button" value="注册" class="btn btn-primary" style="margin-right: 70px;margin-left:70px;" /></a>
                        <input type="submit" class="btn btn-warning" tabindex="3" id="login" value="登录" style="display: inline-block;margin-left: 0px;">
                        <div class="check"></div>
                    </div>
                    <div class="tip"></div>
                </div>
            </div>
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