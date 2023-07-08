<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                email:$("#email").val(),
                pemesanan:$("#pemesanan").val()
            };
            $.ajax({
                type: "post",
                url: "function.php",
                data: data,
                success: function(response){
                    alert(response);
                    if(response == "deleted successfully"){
                       $("#"+action).css("display","none");
                    }
                }
            });
        })
    }
</script>