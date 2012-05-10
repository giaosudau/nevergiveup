<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'comment-form',
		'enableAjaxValidation' => true 
) );
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
	 <!-- Hello <?php echo $form->textField($model,'message',array('size'=>60,'maxlength'=>255)); ?> -->
	 
	 <?php echo $form->textArea($model,'message',array('rows'=>7,'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<!--	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>-->

	<!--	<div class="row">
		<?php echo $form->labelEx($model,'friend_id'); ?>
		<?php echo $form->textField($model,'friend_id'); ?>
		<?php echo $form->error($model,'friend_id'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->