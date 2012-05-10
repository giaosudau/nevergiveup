
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.js');
?>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#hint").click(function(){
            // alert('Yes');
            $("#comment_id").slideToggle(300);
            $("#buser_2870117628").hide();
            $(this).toggleClass("active");
        });
        $("#comment_link").click(function(){
            // alert('Yes');
            $("#comment_id").slideToggle(300);
            $("#buser_2870117628").hide();
            $(this).toggleClass("active");
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


<div class="stbody">
    <div class="stimg">
        2 Image Part
    </div>
    <div class="sttext">
        3 Text Part
    </div>

    <a href="#"id ="comment_link">Comment</a>
    <span class="icodot"> 5 comment</span>
    <span class="likelink"><a  href="" isliked="0">Like</a> 10 liked</span>

</div>     



<div id="box_comment" class="bxcomment">
    <div id="buser_2870117628" class="rowcomment">
        <div id="hint" class="hint">Enter Comment</div>
    </div>
    <div id="comment_id" class="rowcomment" style="display:none; ">
        <div class="rowcommentlt">
            <a>
                <img width="40" height="40" src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg">
            </a>
            <textarea id="txtComment"></textarea>
        </div>
        
           

    </div>
</div>


<!--<div class="rowcomment" id="buser_2870117628">
    <div class="bxwrtcmt tmpcmt" id="inf_2870117628">Nhập lời bình</div>
</div>



<div style="display: block;" class="rowcomment" id="cmtbox_2870117828">
    <div class="rowcommentlt">            
        <a href="/u/giaosudau" onmouseout="zmPW.hm()" onmouseover="zmPW.sm(this)"><img width="40" height="40" src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg"></a>
    </div>
    <div class="rowcommentrt bxwrtcmt">
        <textarea id="txtfc_2870117828" autocomplete="off" style="height: 33px;"></textarea>
    </div>
    <div class="bxcmtend">
        <span class="tipcmtend">Nhấn Shift + Enter để xuống dòng</span>
        <span class="btncmtend">
            <a class="btn_L4 fr" onclick="return false;" id="crtc_2870117828" href="#"><em>Bình luận</em></a>             
            <a onclick="return false;" rel="for_2870117828" id="emofeed_2870117828" class="emofeed" href="#" tabindex="0"></a>
        </span>
    </div>
</div>-->








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