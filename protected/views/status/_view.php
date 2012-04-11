<div class="status">
    <div class="title">
		<?php 
                //echo 'Hello' . $data->user['email'];
                //echo $A->username; 
               ?>
	</div>
        <b><?php echo 'Hello: ' ?>:</b>
	<?php echo $data->user['username'];  ?>
	<br />
<!--	<b><?php 
        echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->status_id), array('view', 'id'=>$data->status_id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbs_up')); ?>:</b>
	<?php echo CHtml::encode($data->thumbs_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbs_down')); ?>:</b>
	<?php echo CHtml::encode($data->thumbs_down); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('reply')); ?>:</b>
	<?php echo CHtml::encode($data->reply); ?>
	<br />-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />-->
        


</div>