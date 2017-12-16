/**
 * Created by dan on 12/15/17.
 */
$(document).ready(function() {
    $(".btn-sc").click(function() {
        if(confirm("是否确认删除?")){
            var id = $(this).attr("data-id");

            var flag = true;
            $.post("/develope/index.php/home/Teacher/delete", {id: id},
                function (data, status) {
                    if(status == "success") {
                        if(data.status == 0)
                            flag = true;
                        else
                            flag = false;
                    }
                });
            if(flag){
                $("tr").remove("#"+id);
            }
        }
    });

    $(".btn-ts").click(function() {
        var id = $(this).attr("data-id");
        $("#ts-name").html($("#ts"+id).html());

        $("#content-form1").submit(function (e) {
            e.preventDefault();
            $.post("/develope/index.php/home/Teacher/post_contents",
                {
                    post_title: $("#input_title1").val(),
                    post_name:	$("#input_name1").val(),
                    post_content:  $("#input_content1").val(),
                    post_stu_id: id,

                    post_year:  $("#dead_year1").val(),
                    post_month:  $("#dead_month1").val(),
                    post_day: $("#dead_day1").val()

                },
                function (data, status) {
                    if(status == "success") {
                        if(data.status == 0) {
                            $("#msg_t1").html("推送成功");
                            window.setTimeout("location.reload()",4000);
                        }
                        else
                            $("#msg_t1").html("推送失败");
                    }
                });
        });

    });

    $("#content-form").submit(function (e) {
        e.preventDefault();
        $.post("/develope/index.php/home/Teacher/post_contents",
            {
                post_title: $("#input_title").val(),
                post_name:	$("#input_name").val(),
                post_content:  $("#input_content").val(),
                post_stu_id: null,

                post_year:  $("#dead_year").val(),
                post_month:  $("#dead_month").val(),
                post_day: $("#dead_day").val()

            },
            function (data, status) {
                if(status == "success") {
                    if(data.status == 0)
                        $("#msg_t").html("发送成功");
                    else
                        $("#msg_t").html("发送失败");
                }
            });

    });

});