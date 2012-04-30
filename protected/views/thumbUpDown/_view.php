<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_up_down_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->thumb_up_down_id), array('view', 'id'=>$data->thumb_up_down_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_id')); ?>:</b>
	<?php echo CHtml::encode($data->friend_id); ?>
	<br />


</div>