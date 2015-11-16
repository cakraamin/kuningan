<?php
/* @var $this KontakController */
/* @var $model Kontak */

$this->breadcrumbs=array(
	'Kontaks'=>array('index'),
	$model->id_kontak,
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	//array('label'=>'Create Kontak', 'url'=>array('create')),
	//array('label'=>'Update Kontak', 'url'=>array('update', 'id'=>$model->id_kontak)),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kontak),'confirm'=>'Are you sure you want to delete this item?','class'=>'delete')),
	//array('label'=>'Manage Kontak', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>View Kontak #<?php echo $model->id_kontak; ?></b></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id_kontak',
		'nama_kontak',
		'email_kontak',
		'phone_kontak',
		'subyek_kontak',
		'komen_kontak',
	),
)); ?>
