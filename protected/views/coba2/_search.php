<?php
/* @var $this Coba2Controller */
/* @var $model Coba2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_coba'); ?>
		<?php echo $form->textField($model,'id_coba'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_coba'); ?>
		<?php echo $form->textField($model,'nama_coba',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->