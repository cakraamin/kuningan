<?php
/* @var $this AwardController */
/* @var $model Award */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_award'); ?>
		<?php echo $form->textField($model,'id_award'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jenis_award'); ?>
		<?php echo $form->textField($model,'id_jenis_award'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_award'); ?>
		<?php echo $form->textField($model,'nama_award',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->