<?php
/* @var $this KontakController */
/* @var $data Kontak */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kontak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kontak), array('view', 'id'=>$data->id_kontak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->email_kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->phone_kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subyek_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->subyek_kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komen_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->komen_kontak); ?>
	<br />


</div>