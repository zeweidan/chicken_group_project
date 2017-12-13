<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>学生列表页</title>
    <!--css style-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/develope/Public/css/main.css" rel="stylesheet"/>
    <!--javascript-->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/develope/Public/js/main.js"></script>
</head>
<body>
    <div class="list-main container-fluid clearfix">
        <div class="list-title">
            待办事项
        </div>
        <div class="list-exit">
            退出
        </div>
    </div>
    <ul class="list-group list-content">
        <li class="list-group-item clearfix">
            <div class="fl"><input type="checkbox"  value="option1" /></div>
            <div class="fl">
                <h4 class="list-group-item-heading">
                    免费域名注册
                </h4>
                <p class="list-group-item-text">
                    昨天
                </p>
            </div>
            <div class="fr"> > </div>
        </li>
        <li class="list-group-item clearfix">
            <div class="fl"><input type="checkbox"  value="option1" /></div>
            <div class="fl">
                <div class="fl">
                    <h4 class="list-group-item-heading">
                        免费域名注册
                    </h4>
                    <p class="list-group-item-text">
                        今天
                    </p>
                </div>
            </div>
            <div class="fr"> > </div>
        </li>
        <li class="list-group-item clearfix">
            <div class="fl"><input type="checkbox"  value="option1" /></div>
            <div class="fl">
                <div class="fl">
                    <h4 class="list-group-item-heading">
                        免费域名注册
                    </h4>
                    <p class="list-group-item-text">
                        12月21日
                    </p>
                </div>
            </div>
            <div class="fr"> > </div>
        </li>
        <li class="list-group-item clearfix">
            <div class="fl"><input type="checkbox"  value="option1" /></div>
            <div class="list-finish fl">
                <div class="fl">
                    <h4 class="list-group-item-heading">
                        免费域名注册
                    </h4>
                    <p class="list-group-item-text">
                        12月20日
                    </p>
                </div>
            </div>
            <div class="fr"> > </div>
        </li>
    </ul>
</body>
</html>