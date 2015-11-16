<?php
/* @var $this AwardController */
/* @var $data Award */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_award')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_award), array('view', 'id'=>$data->id_award)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis_award')); ?>:</b>
	<?php echo CHtml::encode($data->id_jenis_award); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_award')); ?>:</b>
	<?php echo CHtml::encode($data->nama_award); ?>
	<br />


</div>