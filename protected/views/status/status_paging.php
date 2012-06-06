<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerCssFile($baseUrl . '/css/status.css');
$cs->registerScriptFile($baseUrl . '/js/status.js');
$cs->registerScriptFile($baseUrl . '/js/jquery.elastic.js');

?>


<body>
    <?php
//    $modelllo = Automobili::model()->find(array(
//    'select' => '*, rand() as rand',
//    'limit' => '3'
//    'order' => 'rand'
//    ));
    $user_id = Yii::app()->user->id;
    $suggest_friend = Register::model()->findAllBySql("SELECT * 
                                            FROM user
                                            WHERE user_id NOT 
                                            IN (
                                            SELECT friend_list.user_id
                                            FROM friend, friend_list
                                            WHERE friend_list.friend_id = friend.friend_id
                                            AND friend_list.user_id =(:user_id)
                                            )
                                            AND user_id NOT IN (
                                            SELECT user_id
                                            FROM notification
                                            WHERE msg =(:user_id)                                           
                                            )
                                            AND user_id !=1
                                            ORDER BY RAND( ) 
                                            LIMIT 5", 
                                            array(":user_id" => $user_id));
    
                                            
    
    
    $this->renderPartial('slidebar', array('suggest_friend'=>$suggest_friend));
    ?>
    <div class="con">
        <div class="pd">
            <div class="share">Share:</div>
            <div class="status">Status</div>
            <div class="loading"></div>
        </div>
        <form>
            <div class="img_top"></div>
            <div class="text_status">
                <textarea class="input_box">So what's on your mind?</textarea>
               
            </div>
            <div class="button_outside_border_blue" id="share">
                <div class="button_inside_border_blue">Share</div>
            </div>
        </form>

        <div class="clear"></div>
        <div class="load_status_out"></div>
        <div id="update" class="timeline">



            <div id="posts">
                <?php foreach ($status as $st): ?>
                    <div class="post">
                        <div class="stbody">
                            <div class="stimg">
                                <img width="40" height="40"
                                     src="<?php
                $baseUrl = Yii::app()->baseUrl;
                echo $baseUrl . '/images/uploads/' . CHtml::encode(Register::model()->findByAttributes(array(
                            'user_id' => $st->user_id
                        ))->picture);
                    ?>">
                            </div>
                            <div class="sttext">
                                <?php echo CHtml::encode($st->message); ?>
                            </div>
                            <a href="#" class="delete" style="display: none;"> Remove</a> 
                            <span>
                                <?php $this->renderPartial("_thumbupdown"); ?>
                            </span>
<!--                            <span
                                class="icodot"><?php echo $st->commentCount ?></span> 
                            <a href="#"
                                id="comment_link">Comments</a> <span class="likelink"><a href="#"
                                                                                     onclick="return false;" isliked="0">Like</a> 
                                <?php echo $st->thumbs_up ?> liked</span>-->
                            <div id="<?php echo "box_comment" . $st->status_id ?>"
                                 class="bxcomment">
                                     <?php
                                     $this->renderPartial('_comments', array(
                                         'post' => $st,
                                         'comments' => $st->comments
                                     ));
                                     ?>

                            </div>
                            <form>
                                <div id="<?php echo "status" . $st->status_id ?>"
                                     class="rowcomment">
                                    <div class="rowcommentlt">
                                        <a> <img width="40" height="40"
                                                 src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg">
                                        </a>
                                        <textarea class="text_area"
                                                  onKeyPress="return checkSubmit(event)"
                                                  id="txtComment<?php echo $st->status_id ?>"></textarea>
                                        <br>

                                    </div>
                                    <div class="bxcmtend">
                                        <span class="tipcmtend">Nhấn Shift + Enter để xuống dòng</span>
                                        <span class="btncmtend"> <a class="comment_submit"
                                                                    onclick="return false;" id="<?php echo $st->status_id ?>"                                                                   
                                                                    href="#"><em>Comment</em></a> <a onclick="return false;"
                                                                    rel="for_3073657831" id="emofeed_3073657831" class="emofeed"
                                                                    href="#" tabindex="0"></a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>

        </div>



</body>


<?php
$this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array(
    'contentSelector' => '#posts',
    'itemSelector' => 'div.post',
    'loadingText' => 'Loading...',
    'donetext' => 'This is the end... my only friend, the end',
    'pages' => $pages
));
?>
