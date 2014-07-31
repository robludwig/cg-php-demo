<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-payment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'plan'); ?>
		<?php echo $form->textField($model,'plan'); ?>
		<?php echo $form->error($model,'plan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first'); ?>
		<?php echo $form->textField($model,'first'); ?>
		<?php echo $form->error($model,'first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last'); ?>
		<?php echo $form->textField($model,'last'); ?>
		<?php echo $form->error($model,'last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CG_id'); ?>
		<?php echo $form->textField($model,'CG_id'); ?>
		<?php echo $form->error($model,'CG_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'good_thru'); ?>
		<?php echo $form->textField($model,'good_thru'); ?>
		<?php echo $form->error($model,'good_thru'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->