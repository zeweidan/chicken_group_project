/**
 * Created by dan on 12/13/17.
 */
$(document).ready(function() {
    $(".tiao").click(function() {
        if (this.className != "finish-check"){
            this.className = "finish-check";
            this.nextElementSibling.className = "content list-finish fl";

            var stu_id = $(this).attr("data-studentid");
            var content_id = $(this).attr("data-contentid");

            $.post("/develope/index.php/home/List/change",
                {
                    student_id: stu_id,
                    content_id: content_id
                },
                function (data, status) {
                });
        }
    });

    /*当用户点击连接到详情页后 此处需要传递参数*/
    // $(".link").click(function () {
    //    alert("hi");
    // });
});