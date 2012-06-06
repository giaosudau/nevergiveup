<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/slidebar.css');
$cs->registerScriptFile($baseUrl .'/js/slidebar.js');
?>
<form>
    <div>
        <div class="rigt-suggest-friend">
            <div class="right-box-wrapper" style="">
                <div id="frd_suggsetion">
                    <div class="unline" id="friend-intro">
                        <div class="tab"><h3>Friend Suggest</h3>		
                            <a href="#">More</a>
                        </div>
                        <div class="clr"></div>
                        <?php foreach ($suggest_friend as $friend): ?>
                            <div class="rowboxright " >
                                <a href="#"  class="icodelbxrt" title="Delete"></a>
                                <div class="fl avar-42"><span id="spanavatar<?php echo $friend->user_id; ?>">
                                        <a id="suggest<?php echo $friend->user_id; ?>" href="#">
                                            <img src="http://e.1.s50.avatar.zdn.vn/avatar_files/e/1/3/8/xiaoyazi_50_12.jpg" width="45" height="45" >
                                        </a></span></div>
                                <div class="Wrift">
                                    <strong><span id=""spanname<?php echo $friend->user_id; ?>" ><a  title="<?php echo $friend->name_first; ?>" href="#" ><?php echo $friend->name_first . " " . $friend->name_last; ?></a></span></strong></div>
                                <span class="des-box"><span><a  href="http://me.zing.vn/h/giaosudau?type=feed-hot#">1 mutual friend</a></span></span>
                                <span class="poAb">
                                    <span class="ico_add-fr"></span>
                                    <a class ="btn_addfriend"
                                        id="addfriend<?php echo $friend->user_id; ?>" 
                                        onclick="return false;" href="#">
                                        <em>Add Friend </em>
                                    </a>				
                                </span>
                                <div class="clr"></div>
                            </div>
                        <?php endforeach; ?>                 




                    </div>
                </div>



            </div>
        </div>
        <div>

            </form>
