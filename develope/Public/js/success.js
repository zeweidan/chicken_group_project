/**
 * Created by dan on 12/13/17.
 */
$(document).ready(function() {
    function jump(count) {
        window.setTimeout(function(){
            count--;
            if(count > 0) {
                $('#success_count').html(count);
                jump(count);
            } else {
                location.href="#";
            }
        }, 1000);
    }
    jump($('#success_count').html());
});