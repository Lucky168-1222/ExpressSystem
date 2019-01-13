<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/Applications/XAMPP/xamppfiles/htdocs/tp5/public/../application/index/view/index/index.html";i:1528386508;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cyan's index</title>
</head>
<link href="/tp5/public/static/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="/tp5/public/static/css/main.css" type="text/css" rel="stylesheet">
<style>
    .searchtable>tbody>tr:first-child{color: red;font-size: 18px;}
</style>
<body style="background-image: url(/tp5/public/static/img/homebac.jpg); abackground-size: cover;background-repeat: no-repeat;">
<div class="indexmain" id="mydiv">
    <div class="indextop" style="height: 50px;padding: 6px;width: 100%;">
        <img style="float: left; margin-left: 60px; width: 150px;" src="/tp5/public/static/img/logo.png"/>
        <a href="/tp5/public/index/regeister"><button type="submit" style="display: inline;float: right; margin-right:50px;min-width: 80px;" class="btn btn-default">注册</button></a>
        <a href="/tp5/public/index/login"><button type="submit" style="display: inline;float: right; margin-right:50px;min-width: 80px;" class="btn btn-default">登陆</button></a>
    </div>
    <div class="sernav">
        <form role="form" action="<?php echo url('index/index'); ?>" method="post">
            <?php if($number): ?>
            <input type="text" name="number" class="col-sm-offset-3 col-sm-5 serex" placeholder="<?php echo $number; ?>"/>
            <?php else: ?>
            <input type="text" name="number" id="number" class="col-sm-offset-3 col-sm-5 serex" placeholder="请输入快递单号"/>
            <?php endif; ?>
            <button type="submit" class="btn btn-default serbtn col-sm-1" id="serbtn">搜索</button>
        </form>
    </div>
    <?php if($history == 'get'): ?>
    <div class="message">
        <p class="col-sm-offset-3 col-sm-6" style="color: #fff"><?php echo $desc; ?></p>
    </div>
    <?php elseif($history and $history != 'get'): ?>
    <div class="message" style="overflow: auto">
        <table class="table col-sm-offset-4 searchtable " style="color:#fff;width: 30%;" >
            <thead>
            <tr>
                <th>更新时间</th>
                <th>快件状态</th>
            </tr>
            </thead>
            <tbody class="odd gradeX">
            <?php if(is_array($history) || $history instanceof \think\Collection || $history instanceof \think\Paginator): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $one['changetime']; ?></td>
                <td>【<?php echo $one['point']; ?>】
                    <?php if($one['status'] == 1): ?> 已入仓
                    <?php elseif($one['status'] == 2): ?> 已出仓
                    <?php elseif($one['status'] == 3): ?> 派件中
                    <?php elseif($one['status'] == 4): ?> 已完成
                    <?php endif; ?>
                    / 操作员<?php echo $one['employee']; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="indexfoot"></div>
    <?php else: ?>
    <div class="message" style="overflow: auto">
        <table class="table col-sm-offset-4 searchtable " style="color:#fff;width: 30%;" >
            <thead>
            <tr>
                <th>搜索结果</th>
            </tr>
            </thead>
            <tbody class="odd gradeX">
            <tr>
                <td>该单号不存在，请核实后重新搜索！</td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
<script type="text/javascript">
    window.onload = function() {
        //配置
        var config = {
            vx: 4,	//小球x轴速度,正为右，负为左
            vy: 4,	//小球y轴速度
            height: 5,	//小球高宽，其实为正方形，所以不宜太大
            width: 5,
            count: 100,		//点个数
            color: "245, 237, 245", 	//点颜色
            stroke: "130,255,255", 		//线条颜色
            dist: 10000, 	//点吸附距离
            e_dist: 20000, 	//鼠标吸附加速距离
            max_conn: 10	//点到点最大连接数
        }

        //调用
        CanvasParticle(config);
    }
</script>
<script type="text/javascript" src="/tp5/public/static/js/canvas-particle.js"></script>
</body>
</html>