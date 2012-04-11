<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_list_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->friend_list_id), array('view', 'id'=>$data->friend_list_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_id')); ?>:</b>
	<?php echo CHtml::encode($data->friend_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>