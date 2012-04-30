<div class="thumbs">
    <form>
        <input type="button" value=<?php echo $like ?> class="thumbup" name ="up" id=<?php echo $status_id ?>>
<!--        <input type="button" value="Dislike" class ="thumbdown" name="down" id=<?php echo $status_id ?>>-->
        <div id="like"></div>


    </form>

</div>
<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $(".thumbup").click(function()
        {
            var id=$(this).attr("id");
            var name=$(this).attr("name");
            var dataString = 'id='+ id + '&name='+ name;
            $.ajax
            ({
                type: "POST",
                url: "status_thumbup",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    if( $(".thumbup").val()=='Like'){
                        $(".thumbup").val("Unlike");
                    }
                    else{
                        $(".thumbup").val("Like");
                    }                   
                   
                    
                    $("#like").html(html);
                   
                   
                    
                } 
            });
            
        });
        $(".thumbdown").click(function(){
            
            var id=$(this).attr("id");
            var name=$(this).attr("name");
            var dataString = 'id='+ id + '&name='+ name;
            $.ajax
            ({                
                type: "POST",
                url: "status_thumbup",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    
                    if( $(".thumbdown").val()=='Dislike'){
                        $(".thumbdown").val("UnDislike");
                    }
                    else{
                        $(".thumbdown").val("Dislike");
                    }                  
                   
                    
                    $("#like").html(html);
                }
            });
        });
    });
</script>