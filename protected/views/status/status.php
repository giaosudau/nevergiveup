<!-- Created by Barrett at RRPowered.com -->
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerScriptFile($baseUrl . '/js/jquery.elastic.js');
$cs->registerCssFile($baseUrl . '/css/status.css');
?>

<style>


    ol
    {
        list-style:none;
        margin:0px;
        padding:0px;
    }
    .stbody
    {
        min-height:70px;
        margin-bottom:10px;
        border-bottom:dashed 1px #cc0000;
    }
    .stimg
    {
        float:left;
        height:50px;
        width:50px;
        border:solid 1px #dedede;
        padding:5px;
    }
    .sttext
    {
        margin-left:70px;
        min-height:50px;
        word-wrap:break-word;
        overflow:hidden;
        padding:5px;
        display:block;
        font-family:'Georgia', Times New Roman, Times, serif
    }

</style>

<html>
    <head>
        <title>FaceBook Style Status Update</title>
        <script type="text/javascript">
            /*
             * Auto Expanding Text Area 
             * by  Jan Jarfalk (www.unwrongest.com)
             */
            $( function(){
                $(".input_box").elastic().css("height","30px");
 
 
                $(".input_box").focus(function(){
                    $(this).filter(function(){
                        return $(this).val() == "" || $(this).val() == "So what's on your mind?"
                    }).val("").css("color","#000000");
                });
                $(".input_box").blur(function(){
                    $(this).filter(function(){
                        return $(this).val() == ""
                    }).val("So what's on your mind?").css("color","#808080");
                });
 
                $("#share").click(function(){
                    var a_p = "";
                    var d = new Date();
                    var curr_hour = d.getHours();
                    if (curr_hour < 12){
                        a_p = "am";
                    }else{
                        a_p = "pm";
                    }
                    if (curr_hour == 0){
                        curr_hour = 12;
                    }
                    if (curr_hour > 12){
                        curr_hour = curr_hour - 12;
                    }
                    var curr_min = d.getMinutes();
                    curr_min = curr_min + "";
                    if (curr_min.length == 1){
                        curr_min = "0" + curr_min;
                    }
                    var m_names = new Array("Jan", "Feb", "Mar", 
                    "Apr", "May", "Jun", "Jul", "Aug", "Sep", 
                    "Oct", "Nov", "Dec");
                    var d = new Date();
                    var curr_date = d.getDate();
                    var curr_month = d.getMonth();
                    var curr_year = d.getFullYear();
                    var date = m_names[curr_month] +" "+ curr_date +" "+"at"+" "
                        + curr_hour + ":" + curr_min + " " + a_p;
 
                    $(".loading").show();
                    var status=$(".input_box").val();
                    if(status == "So what's on your mind?"){
                        $(".loading").hide();
                    }else{
                        var DATA = 'status=' + status + '&date=' +date;
                        $.ajax({
                            type: "POST",
                            url: "./status/ajaxcreate",
                            data: DATA,
                            cache: false,
                            success: function(data){
                                $(data).prependTo(".load_status_out").slideDown("slow");
                                $(".loading").hide();
                                $(".input_box").val("So what's on your mind?").css("color","#808080")
                                .css("height","30px");
                            }
                        });
                    }
                    return false;
                });
            });
        </script>  
    </head>
    <body>

        <h1>FaceBook style status update</h1>
        <form>
            <div class="con">
                <div class="pd">
                    <div class="share">Share:</div>
                    <div class="status">Status</div>
                    <div class="loading"></div>
                </div>
                <div class="img_top"></div>
                <div class="text_status">
                    <textarea class="input_box"></textarea> So what's on your mind?</div>
                <div class="button_outside_border_blue" id="share">
                    <div class="button_inside_border_blue">
                        Share
                    </div>
                </div>
                <div class="clear"></div>
                <div class="load_status_out"></div>

                
                
                // f*ck that shit

                <ol>
                    // Loop Start
                    <li class="stbody">
                        <div class="stimg">
                            <img src="sri.jpg"/>
                        </div>
                        <div class="sttext">
                            9lessons programming blog http://9lessons.info
                            <div class="sttime">2 seconds ago</div>
                        </div>
                    </li>
                    //Loop End
                </ol> 





                <!--                <div class="load_status">
                                    <div class="status_img"><img src="blankSilhouette.png" /></div>
                                    <div class="status_text"><a href="#" class="blue"><?php //echo $user;   ?></a>
                                        <p class="text">'  '</p>
                                        <div class="date">'  ' &middot; <a href="#" class="light_blue">
                                                Like</a> &middot; <a href="#" class="light_blue">Comment</a></div>
                                        <div id="loadplace <?php //echo $msg_id;    ?>"></div>
                                        <div id="flash <?php //echo $msg_id;    ?>"></div>
                                        <div class='panel' id="slidepanel <?php // echo $msg_id;    ?>">
                                            <form action="" method="post" name="<?php //echo $msg_id;    ?>">
                                                <textarea id="textboxcontent <?php //echo $msg_id;    ?>" ></textarea><br />
                                                <input type="button" value=" Comment" 
                                                       class="comment_submit" id="<?php //echo $msg_id;    ?>" />
                                            </form>
                                        </div>​
                                    </div>
                                    <div class="clear"></div>
                                </div>'​​​​-->




            </div>
        </form>
    </body>
</html>
