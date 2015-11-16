<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_gellery'); ?>
		<?php echo $form->textField($model,'id_gellery'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_gallery'); ?>
		<?php echo $form->textField($model,'judul_gallery',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_gallery'); ?>
		<?php echo $form->textField($model,'date_gallery'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_gallery'); ?>
		<?php echo $form->textField($model,'image_gallery',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desk_gallery'); ?>
		<?php echo $form->textArea($model,'desk_gallery',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->