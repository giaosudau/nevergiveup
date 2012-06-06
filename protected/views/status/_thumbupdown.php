<!--<div class="thumbs">
    <form>
        <input type="button" value=<?php //echo $like     ?> class="thumbup" name ="up" id=<?php //echo $status_id     ?>>
        <input type="button" value="Dislike" class ="thumbdown" name="down" id=<?php //echo $status_id     ?>>
        <div id="like"></div>


    </form>

</div>-->
<style>
    .actlinkrt {
        line-height: 16px;
        margin-bottom: 5px;
    }
    .ficon_photo {
        background-position: -1504px -0px;
    }
    .icofeed, .icofapp {
        height: 18px;
        width: 16px;
        margin-right: 4px;
        float: left;
    }
    ul.list-app li span, .menu-item, .menu-item-sub, .icofeed {
        background-image: url(/nevergiveup/images/appsprite-1.75.png);
        background-repeat: no-repeat;}
    body {
        font: normal 11px/18px tahoma,Helvetica,verdana,arial,sans-serif;
        color: 
            #333;
        text-align: left;
    }
    .grey, .nickname, .twttime, .namesharefeed {
        color: 
            #888;
    }
    .icodot {
        background-position: -152px -34px;
        height: 11px;
        margin: 0 5px;
        width: 3px;
        display: inline-block;
        background-image: url("/nevergiveup/images/skin-1.47.gif");
    }
    .actlinkrt {
        line-height: 16px;
    }
    a, a:active {
        color: 
            #476DA4;
        text-decoration: none;
    }   
    .icodot {
        background-position: -152px -34px;
        height: 11px;
        margin: 0 5px;
        width: 3px;
        display: inline-block;
    }
    .likelink {
        background-position: left -455px;
        padding-left: 20px;
    }
</style>
<div class="actlinkrt">
    <span class="icofeed ficon_photo"></span>
    <span rel="1338892894" id="ft_3174841026" class="grey">7H AM</span>        

    <span class="icodot"></span>
    <span class="grey">20 comments</span>



    <span class="icodot"></span>
    <span class="likelink"><a onclick="" href="#" isliked="0" id="zmev-3174841026">Like</a></span>


    <span class="icodot"></span>



</div>


<!--    <script type="text/javascript"
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
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