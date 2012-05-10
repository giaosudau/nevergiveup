
<ol>
    <!--    <li class="stbody">
            <div class="stimg">
                <img src="sri.jpg"/>
            </div>
            <div class="sttext">
    <?php // echo CHtml::encode($data->message); ?>
                <div class="sttime">2 seconds ago</div>
            </div>
            <textarea class="text_area"  name="comment_value" id="textarea<?php //$id;    ?>">
            </textarea><br />
        </li>-->

    <div class="stbody">
        <div class="stimg">
            2 Image Part
        </div>
        <div class="sttext" id ="<?php echo CHtml::encode($data->status_id); ?>">
            <?php echo CHtml::encode($data->message); ?>
        </div>
        <a href="#" id ="comment_link">Comment</a>
        <span class="icodot"> 5 comment</span>
        <span class="likelink"><a  href="#" isliked="0">Like</a> 10 liked</span>
        <div id="box_comment" class="bxcomment">
            
            <div id="comment_id" class="rowcomment">
                <div class="rowcommentlt">
                    <a>
                        <img width="40" height="40" src="http://3.1.s50.avatar.zdn.vn/avatar_files/3/c/d/8/giaosudau_50_3.jpg">
                    </a>
                    <textarea id="txtComment"></textarea>
                </div>
            </div>
        </div>
    </div>   
    
    
    
    
    
    <div id="comments">
    <?php if ($data->commentCount >= 1): ?>
        <h3>
            <?php echo $model->commentCount > 1 ? $data->commentCount . '
comments' : 'One comment'; ?>
        </h3>
    <?php endif; ?>
    <?php
    $this->renderPartial('_comments', array(
        'post' => $data,
        'comments' => $data->comments,
    ));
    ?>
 
    
    
    
</ol> 

<!--<div class="status">
    <div class="title">
<?php
//echo 'Hello' . $data->user['email'];
//echo $A->username; 
?>
        </div>
        <b><?php echo 'Hello: ' ?>:</b>
<?php echo $data->user['username']; ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->status_id), array('view', 'id' => $data->status_id)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
<?php echo CHtml::encode($data->message); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
<?php echo CHtml::encode($data->created); ?>
        <br />
        
<?php //$this->renderPartial('_thumbupdown',array('status_id' =>$data->status_id)) ?>

        <b><?php echo CHtml::encode($data->getAttributeLabel('thumbs_up')); ?>:</b>
<?php echo CHtml::encode($data->thumbs_up); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('thumbs_down')); ?>:</b>
<?php echo CHtml::encode($data->thumbs_down); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('reply')); ?>:</b>
<?php echo CHtml::encode($data->reply); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
<?php echo CHtml::encode($data->user_id); ?>
        <br />
        


</div>-->