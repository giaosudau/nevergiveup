<div style="display: block;" class="rowcomment" id="divLike<?php echo $post->status_id ?>">
    <span class="likelink" id="like-view-<?php echo $post->status_id ?>">
        <span id="wgv_<?php echo $post->status_id ?>">
            <a id="wgdwgv<?php echo $post->status_id ?>" title="" href="#" ><?php echo $post->thumbs_up ?></a>
        </span>&nbsp;thích điều này.</span>
</div>
<?php foreach ($comments as $comment): ?>
    <span>
    <div id ="<?php echo "comment" . $comment->comment_id ?>" class="rowcomment">
       
        <div class="rowcommentlt"><a>
                <img width="32" height="32" src="<?php
    $baseUrl = Yii::app()->baseUrl;
    echo $baseUrl . '/images/uploads/' //Register::model()->findByPk(Friend::model()->findByPk($comment->friend_id)->user_id)->picture;
    ?>"></a></div>            
                <div class ="rowcommentrt"> 
                <a style="font-size: 12px;" href="<?php
                 echo $baseUrl
                 . '/index.php/profile/' . Yii::app()->user->id
    ?>" >

                <strong><?php
           //echo Register::model()->findByPk(Friend::model()->findByPk($comment->friend_id)->user_id)->name_first .
           //   Register::model()->findByPk(Friend::model()->findByPk($comment->friend_id)->user_id)->name_last ;
    ?></strong></a><?php
            echo CHtml::encode($comment->message);
            ?>
            <p>
                <span class="grey">8 tiếng trước</span>
            </p>
        </div>  
    </div>
<span>

<?php endforeach; ?>