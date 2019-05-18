<script>

$(document).ready(function(){
    var num = 1;
    $("button").click(funtion(){
        num = num + 1;
        $("#username").load("load-username.php", {
            newnum = num
        
        });
    });
});

</script>