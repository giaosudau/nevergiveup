<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'register-form',
		'enableAjaxValidation' => false 
) );
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'password_repeat'); ?>
		<?php echo $form->passwordField($model,'password_repeat', array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password_repeat'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_first'); ?>
		<?php echo $form->textField($model,'name_first',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_last'); ?>
		<?php echo $form->textField($model,'name_last',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'picture'); ?>
		<?php // echo $form->textField($model,'picture',array('size'=>60,'maxlength'=>255)); ?>
		<?php // echo $form->error($model,'picture'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'active'); ?>
		<?php // echo $form->textField($model,'active'); ?>
		<?php // echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'created'); ?>
		<?php //echo $form->textField($model,'created'); ?>
		<?php //echo $form->error($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->




