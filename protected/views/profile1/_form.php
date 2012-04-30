<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($model,'dob'); ?>
<?php //echo $form->textField($model,'dob');?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
        array(
            'model'=>$model,
            'attribute'=>'dob',
            'name'=>'dob',
            'value'=>'',
            'language'=>'',
            'themeUrl' => Yii::app()->baseUrl.'/css/jui' ,
            'theme'=>'base',
            'cssFile'=>array('jquery-ui.css'),
            'options'=>array(
                'dateFormat'=>'yy-mm-dd',
                'changeMonth'=>'true',
                'changeYear'=>'true',
                'showButtonPanel'=>'true',
                'constrainInput'=>'false',
                'duration'=>'fast',
                'showAnim'=>'slide',
            )
           /* 'htmlOptions'=>array(
                'style'=>'height:30px;
                        background:#fff;
                        color:#00a;
                        font-weight:bold;
                        font-size:0.9em;
                        border: 1px solid #A80;
                        padding-left: 4px;'
            )*/

        ));?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textField($model,'about',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relationship'); ?>
		<?php echo $form->textField($model,'relationship',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'relationship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'looking_for'); ?>
		<?php echo $form->textField($model,'looking_for',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'looking_for'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest'); ?>
		<?php echo $form->textField($model,'interest',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'interest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobbies'); ?>
		<?php echo $form->textArea($model,'hobbies',array('size'=>150,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hobbies'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->