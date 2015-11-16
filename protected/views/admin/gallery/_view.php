<?php
/* @var $this GalleryController */
/* @var $data Gallery */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gellery')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gellery), array('view', 'id'=>$data->id_gellery)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_gallery')); ?>:</b>
	<?php echo CHtml::encode($data->judul_gallery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_gallery')); ?>:</b>
	<?php echo CHtml::encode($data->date_gallery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_gallery')); ?>:</b>
	<?php echo CHtml::encode($data->image_gallery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desk_gallery')); ?>:</b>
	<?php echo CHtml::encode($data->desk_gallery); ?>
	<br />


</div>