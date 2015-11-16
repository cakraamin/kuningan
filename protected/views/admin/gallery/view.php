<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id_gellery,
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id_gellery),'linkOptions'=>array('class' => 'edit')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gellery),'confirm'=>'Are you sure you want to delete this item?','class'=>'delete')),
	//array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>View Gallery #<?php echo $model->id_gellery; ?></b></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id_gellery',
		'judul_gallery',
		'date_gallery',
		'image_gallery',
		'desk_gallery',
	),
)); ?>
