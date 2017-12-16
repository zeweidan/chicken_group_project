<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>信息列表</title>
    <!--css style-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/develope/Public/css/stulist.css" rel="stylesheet"/>
    <!--javascript-->
    <script type="text/javascript" src="/develope/Public/js/jquery-3.2.1.js"></script>
    <script type="javascript/text" src="/develope/Public/js/bootstrap.js"></script>
    <script src="/develope/Public/js/stulist.js"></script>
</head>
<body style="background-color: #F0F0F0">
    <div class="list-main container-fluid clearfix">
        <div class="list-title">
        </div>
        <div class="exit">
            <div class="list-name"><?php echo ($name); ?></div>
            <div class="list-exit">
            </div>
        </div>
    </div>
    <div>
        <ul class="list-group list-content">
            <?php echo ($user); ?>
        </ul>
    </div>
</body>
</html>