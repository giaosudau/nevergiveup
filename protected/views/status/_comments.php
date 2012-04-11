<?php foreach($comments as $comment): ?>
<div class="comment" id="c<?php echo $comment->comment_id; ?>">

	
	<div class="author">
		<?php echo $comment->friend_id; ?> says:
	</div>

	<div class="time">
		<?php echo $comment->created; ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comment->message)); ?>
	</div>

</div><!-- comment -->
<?php endforeach; ?>