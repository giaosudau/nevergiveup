<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>7,'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbs_up'); ?>
		<?php echo $form->textField($model,'thumbs_up'); ?>
		<?php echo $form->error($model,'thumbs_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbs_down'); ?>
		<?php echo $form->textField($model,'thumbs_down'); ?>
		<?php echo $form->error($model,'thumbs_down'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reply'); ?>
		<?php echo $form->textField($model,'reply',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'reply'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->