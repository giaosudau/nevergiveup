<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->friend_id), array('view', 'id'=>$data->friend_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subscriber')); ?>:</b>
	<?php echo CHtml::encode($data->subscriber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friend_list_id')); ?>:</b>
	<?php echo CHtml::encode($data->friend_list_id); ?>
	<br />


</div>