<div class="stbody">
    <div class="stimg">
        <img width="40" height="40"
             src="<?php
$baseUrl = Yii::app()->baseUrl;
echo $baseUrl . '/images/uploads/'
 . CHtml::encode(Register::model()->findByAttributes(array(
            'user_id' => $data->user_id
        ))->picture);
?>">
    </div>
    <div class="sttext">
        <?php echo CHtml::encode($data->message); ?>
    </div>
    <a href="#" class="delete" style="display: none;"> Remove</a> 


    <div id="<?php echo "box_comment" . $data->status_id ?>"
         class="bxcomment">
             <?php
             $this->renderPartial('_comments', array(
                 'post' => $data,
                 'comments' => $data->comments
             ));
             ?>

    </div>
    <form>
        <div id="<?php echo "status" . $data->status_id ?>" class="rowcomment">
            <div class="rowcommentlt">
                <a> <img width="40" height="40"
                         src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg">
                </a>
                <textarea class="text_area" onKeyPress="return checkSubmit(event)"
                          id="txtComment<?php echo $data->status_id ?>"></textarea>
                <br>

            </div>
            <div class="bxcmtend">
                <span class="tipcmtend">Nhấn Shift + Enter để xuống dòng</span> <span
                    class="btncmtend"> <a class="comment_submit"
                                      onclick="return false;" id="<?php echo $data->status_id ?>"
                                      href="#"><em>Comment</em></a> <a onclick="return false;"
                                      rel="for_3073657831" id="emofeed_3073657831" class="emofeed"
                                      href="#" tabindex="0"></a>
                </span>
            </div>
        </div>
    </form>
</div>





















