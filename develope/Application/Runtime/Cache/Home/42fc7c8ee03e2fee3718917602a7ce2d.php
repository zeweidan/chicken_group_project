<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>学生列表页</title>
    <!--css style-->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/develope/Public/css/stulist.css" rel="stylesheet"/>
    <!--javascript-->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/develope/Public/js/stulist.js"></script>
</head>
<body style="background-color: #F0F0F0">
    <div class="list-main container-fluid clearfix">
        <div class="list-title">
        </div>
        <div class="list-exit">
        </div>

    </div>
    <div>
        <ul class="list-group list-content">
            <?php echo ($user); ?>
            <!--<li class="list-group-item clearfix">-->
                <!--<div class="overdate-check fl"></div>-->
                <!--<div class="content list-over fl">-->
                    <!--<div class="list-group-item-heading">-->
                        <!--请学生务必阅读并完成医保填写-->
                    <!--</div>-->
                    <!--<p class="list-group-item-text">-->
                        <!--今天-->
                    <!--</p>-->
                <!--</div>-->
                <!--<div class="link fr"></div>-->
            <!--</li>-->
            <!--<li class="list-group-item clearfix">-->
                <!--<div class="ddl-check fl"></div>-->
                <!--<div class="content fl">-->
                    <!--<div class="list-group-item-heading">-->
                        <!--请学生务必阅读并完成医保填写-->
                    <!--</div>-->
                    <!--<p class="list-on list-group-item-text">-->
                        <!--今天-->
                    <!--</p>-->
                <!--</div>-->
                <!--<div class="link fr"></div>-->
            <!--</li>-->
            <!--<li class="list-group-item clearfix">-->
                <!--<div class="ddl-check fl"></div>-->
                <!--<div class="content fl">-->
                    <!--<div class="list-group-item-heading">-->
                        <!--请学生务必阅读并完成医保填写-->
                    <!--</div>-->
                    <!--<p class="list-on list-group-item-text">-->
                        <!--12月21日-->
                    <!--</p>-->
                <!--</div>-->
                <!--<div class="link fr"></div>-->
            <!--</li>-->
            <!--<li class="list-group-item clearfix">-->
                <!--<div class="finish-check fl"></div>-->
                    <!--<div class="content list-finish fl">-->
                        <!--<div class="list-group-item-heading">-->
                            <!--请学生务必阅读并完成医保填写-->
                        <!--</div>-->
                        <!--<p class="list-group-item-text">-->
                            <!--12月20日-->
                        <!--</p>-->
                    <!--</div>-->
                <!--<div class="link fr"></div>-->
            <!--</li>-->
        </ul>
    </div>
</body>
</html>