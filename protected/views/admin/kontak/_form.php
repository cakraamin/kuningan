<?php
/* @var $this KontakController */
/* @var $model Kontak */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kontak-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kontak'); ?>
		<?php echo $form->textField($model,'nama_kontak',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_kontak'); ?>
		<?php echo $form->textField($model,'email_kontak',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_kontak'); ?>
		<?php echo $form->textField($model,'phone_kontak',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone_kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subyek_kontak'); ?>
		<?php echo $form->textField($model,'subyek_kontak',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subyek_kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'komen_kontak'); ?>
		<?php echo $form->textArea($model,'komen_kontak',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'komen_kontak'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->