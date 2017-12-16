<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册学生管理</title>
    <!--css style-->
    <link href="/develope/Public/css/bootstrap.min.css" rel="stylesheet"/>
    <!--javascript-->
    <script type="text/javascript" src="/develope/Public/js/jquery-3.2.1.js"></script>
    <script type="javascript/text" src="/develope/Public/js/bootstrap.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/develope/Public/js/teacher.js"></script>


    <style type="text/css">
        *{list-style:none;}
        .main{margin-top: 50px;}
        #post_dead{width:100%;}
        #ul li{width:25%;float:left;}
        #ul li input {width:3rem;}
        #post_title {width:100%;}
        #post_name {width:100%;}
        #input_title {width:80%}
        #input_name{width:80%}
        #post_content{width:100% ;height:16rem;}
        textarea{width:100%;height:100%;}
        #post_btn{margin-top:4rem;}
        #msg_t, #msg_t1 {color:red;}
    </style>

</head>
<body style="background-color: #fff">
<div class="main container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="tabbable" id="tabs-962189">

                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-89788" data-toggle="tab">学生注册信息</a>
                    </li>
                    <li>
                        <a href="#panel-697160" data-toggle="tab">教师信息发送</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="panel-89788">
                        <p>
                        <div class="page-header">
                            <h3>
                                注册学生信息
                            </h3>
                        </div>
                        <table class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>姓名</th>
                                    <th>学号</th>
                                    <th>邮箱</th>
                                    <th>密码</th>
                                    <th>是否删除</th>
                                    <th>信息推送</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo ($stu_info); ?>
                            </tbody>
                        </table>

                        <!-- 模态框（Modal） -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            推送信息--><span id="ts-name"></span>
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="content-form1">
                                            <!--发送的标题-->
                                            <div id="post_title1">
                                                标题：<input type="text" id="input_title1" />
                                            </div>
                                            <!--发送人-->
                                            <div id="post_name1">
                                                发送人:<input type="text" id="input_name1" />
                                            </div>
                                            <!--截止时间-->
                                            <div id="post_dead1">
                                                <ul>
                                                    <li>DeadLine：</li>
                                                    <li><input type="text" placeholder="年" id="dead_year1"/></li>
                                                    <li><input type="text" placeholder="月" id="dead_month1"/></li>
                                                    <li><input type="text" placeholder="日" id="dead_day1"/></li>
                                                </ul>
                                            </div>
                                            <!--发送内容-->
                                            <div id="post_content1">
                                                <textarea id="input_content1"></textarea>
                                            </div>
                                            <!--发送按钮-->
                                            <div id="post_btn1">
                                                <input type="submit" id="post_button1" value="发送"/>
                                            </div>
                                        </form>
                                        <div id="msg_t1"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                        </button>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal -->
                        </div>

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                        </p>
                    </div>

                    <div class="tab-pane fade" id="panel-697160">
                        <p>
                        <div class="page-header">
                            <h3>
                                信息将加入所有学生list列表
                            </h3>
                        </div>
                        <div id="content">
                            <center>
                                <form id="content-form">
                                    <!--发送的标题-->
                                    <div id="post_title">
                                        标题：<input type="text" id="input_title" />
                                    </div>
                                    <!--发送人-->
                                    <div id="post_name">
                                        发送人:<input type="text" id="input_name" />
                                    </div>
                                    <!--截止时间-->
                                    <div id="post_dead">
                                        <ul>
                                            <li>DeadLine：</li>
                                            <li><input type="text" placeholder="年" id="dead_year"/></li>
                                            <li><input type="text" placeholder="月" id="dead_month"/></li>
                                            <li><input type="text" placeholder="日" id="dead_day"/></li>
                                        </ul>
                                    </div>
                                    <!--发送内容-->
                                    <div id="post_content">
                                        <textarea id="input_content"></textarea>
                                    </div>
                                    <!--发送按钮-->
                                    <div id="post_btn">
                                        <input type="submit" id="post_button" value="发送"/>
                                    </div>
                                </form>
                                <div id="msg_t"></div>
                            </center>
                        </div>
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>