<?php
/* @var $this Coba2Controller */
/* @var $data Coba2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_coba')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_coba), array('view', 'id'=>$data->id_coba)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_coba')); ?>:</b>
	<?php echo CHtml::encode($data->nama_coba); ?>
	<br />


</div>