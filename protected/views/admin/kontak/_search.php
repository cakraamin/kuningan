<?php
/* @var $this KontakController */
/* @var $model Kontak */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kontak'); ?>
		<?php echo $form->textField($model,'id_kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kontak'); ?>
		<?php echo $form->textField($model,'nama_kontak',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_kontak'); ?>
		<?php echo $form->textField($model,'email_kontak',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_kontak'); ?>
		<?php echo $form->textField($model,'phone_kontak',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subyek_kontak'); ?>
		<?php echo $form->textField($model,'subyek_kontak',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'komen_kontak'); ?>
		<?php echo $form->textArea($model,'komen_kontak',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->