<!-- Created by Barrett at RRPowered.com -->
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerScriptFile($baseUrl . '/js/jquery.elastic.js');
$cs->registerCssFile($baseUrl . '/css/status.css');
?>

<style>

    body
    {
        font-family:Arial, Helvetica, sans-serif;
        font-size:14px;
    }
    .update_box
    {
        background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
    }
    a
    {
        text-decoration:none;
        color:#d02b55;
    }
    a:hover
    {
        text-decoration:underline;
        color:#d02b55;
    }
    *{margin:0;padding:0;}


    ol.timeline
    {list-style:none;font-size:1.2em;}ol.timeline li{ display:none;position:relative; }ol.timeline li:first-child{border-top:1px dashed #006699;}
    .delete_button
    {
        float:right; margin-right:10px; width:20px; height:20px
    }

    .cdelete_button
    {
        float:right; margin-right:10px; width:20px; height:20px
    }

    .feed_link
    {
        font-style:inherit; font-family:Georgia; font-size:13px;padding:10px; float:left; width:350px
    }
    .comment
    {
        color:#0000CC; text-decoration:underline
    }
    .delete_update
    {
        font-weight:bold;

    }
    .cdelete_update
    {
        font-weight:bold;

    }
    .post_box
    {
        height:55px;border-bottom:1px dashed #006699;background-color:#F3F3F3;  width:499px;padding:.7em 0 .6em 0;line-height:1.1em;

    }
    #fullbox
    {
        margin-top:6px;margin-bottom:6px; display:none;
    }
    .comment_box
    {
        display:none;margin-left:90px; padding:10px; background-color:#d3e7f5; width:300px;  height:50px;

    }
    .comment_load
    {
        margin-left:90px; padding:10px; background-color:#d3e7f5; width:300px; height:30px; font-size:15px; border-bottom:solid 1px #FFFFFF;

    }
    .text_area
    {
        width:290px;
        font-size:12px;
        height:30px;

    }



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
    .comment
    {
        color:#0000CC; text-decoration:underline
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
                
                $("#hint").click(function(){
                    // alert('Yes');
                    $("#comment_id").slideToggle(300);
                    $("#buser_2870117628").hide();
                    $(this).toggleClass("active");
                });
                $("#comment_link").click(function(){
                    //alert('Yes');
                    $("#comment_id").slideToggle(300);
                    $("#buser_2870117628").hide();
                    $(this).toggleClass("active");
                    
                });
                
                
                
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
                            url: "./ajaxcreate",
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

<style type="text/css">



    element.style {
        display: block;
    }
    .rowcomment {
        background: none repeat scroll 0 0 #F0F3F7;
        border-bottom: 1px solid #EAEFF4;
        display: block;
        margin-bottom: 1px;
        overflow: hidden;
        padding: 5px;
    }


    .rowcommentrt textarea {
        border: medium none;
        min-height: 33px;
        outline: medium none;
        overflow: hidden;
        padding: 0 !important;
        resize: none;
        width: 100%;
    }


    .bxcomment {
        display: block;
        margin: 5px 58px 0 0;
    }

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
        word-wrap:break-word; // Text justification
        overflow:hidden;
        padding:5px;
        display:block;
        font-family:'Georgia', Times New Roman, Times, serif
    }
</style>
       
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






                










                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_view',
                ));
                ?>


                <!--                <ol>
                                  
                                    <li class="stbody">
                                        <div class="stimg">
                                            <img src="sri.jpg"/>
                                        </div>
                                        <div class="sttext">
                                            9lessons programming blog http://9lessons.info
                                            <div class="sttime">2 seconds ago</div>
                                        </div>
                                        <textarea class="text_area" style="width:290px;height:23px" name="comment_value" id="textarea<?php //$id;         ?>">
                                </textarea><br />
                                    </li>
                                    //Loop End
                                </ol> -->





                <!--                <div class="load_status">
                                    <div class="status_img"><img src="blankSilhouette.png" /></div>
                                    <div class="status_text"><a href="#" class="blue"><?php //echo $user;            ?></a>
                                        <p class="text">'  '</p>
                                        <div class="date">'  ' &middot; <a href="#" class="light_blue">
                                                Like</a> &middot; <a href="#" class="light_blue">Comment</a></div>
                                        <div id="loadplace <?php //echo $msg_id;             ?>"></div>
                                        <div id="flash <?php //echo $msg_id;             ?>"></div>
                                        <div class='panel' id="slidepanel <?php // echo $msg_id;             ?>">
                                            <form action="" method="post" name="<?php //echo $msg_id;             ?>">
                                                <textarea id="textboxcontent <?php //echo $msg_id;             ?>" ></textarea><br />
                                                <input type="button" value=" Comment" 
                                                       class="comment_submit" id="<?php //echo $msg_id;             ?>" />
                                            </form>
                                        </div>​
                                    </div>
                                    <div class="clear"></div>
                                </div>'​​​​-->




            </div>
        </form>
    </body>
</html>
