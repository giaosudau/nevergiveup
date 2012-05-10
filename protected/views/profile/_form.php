<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'profile-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'user_id'); ?>
<?php echo $form->textField($model, 'user_id'); ?>
<?php echo $form->error($model, 'user_id'); ?>
    </div>




    <div class="row">
        <?php echo $form->labelEx($model, 'rating'); ?>
<?php echo $form->textField($model, 'rating', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'rating'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dob'); ?>
<?php echo $form->textField($model, 'dob'); ?>
<?php echo $form->error($model, 'dob'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nickname'); ?>
<?php echo $form->textField($model, 'nickname', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'nickname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'about'); ?>
<?php echo $form->textField($model, 'about', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'about'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'relationship'); ?>
<?php echo $form->textField($model, 'relationship', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'relationship'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'looking_for'); ?>
<?php echo $form->textField($model, 'looking_for', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'looking_for'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'phone'); ?>
<?php echo $form->textField($model, 'phone', array('size' => 60, 'maxlength' => 100)); ?>
<?php echo $form->error($model, 'phone'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'interest'); ?>
<?php echo $form->textField($model, 'interest', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'interest'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'education'); ?>
<?php echo $form->textField($model, 'education', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'education'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hobbies'); ?>
<?php echo $form->textField($model, 'hobbies', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'hobbies'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'created'); ?>
<?php echo $form->textField($model, 'created'); ?>
<?php echo $form->error($model, 'created'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->