/**
 * Created by dan on 12/13/17.
 */
$(document).ready(function() {
    //获取邮件地址
    // var email = "zewei.dan@foxmail.com";
    //
    // $.post("/develope/index.php/home/Success/sendEmail",
    //     {
    //         email: email
    //     },
    //     function (data, status) {
    //         if(status == "success") {
    //             //alert("success");
    //         }
    //     });

    function jump(count) {
        window.setTimeout(function(){
            count--;
            if(count > 0) {
                $('#success_count').html(count);
                jump(count);
            } else {
                location.href="/develope/index.php/home/list";
            }
        }, 1000);
    }
    jump($('#success_count').html());
});