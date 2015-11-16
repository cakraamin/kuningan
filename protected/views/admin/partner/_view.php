<?php
/* @var $this PartnerController */
/* @var $data Partner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_partner')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_partner), array('view', 'id'=>$data->id_partner)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_partner')); ?>:</b>
	<?php echo CHtml::encode($data->nama_partner); ?>
	<br />


</div>