<?php
/* @var $this Coba2Controller */
/* @var $model Coba2 */

$this->breadcrumbs=array(
	'Coba2s'=>array('index'),
	$model->id_coba,
);

$this->menu=array(
	array('label'=>'List Coba2', 'url'=>array('index')),
	array('label'=>'Create Coba2', 'url'=>array('create')),
	array('label'=>'Update Coba2', 'url'=>array('update', 'id'=>$model->id_coba)),
	array('label'=>'Delete Coba2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_coba),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coba2', 'url'=>array('admin')),
);
?>

<h1>View Coba2 #<?php echo $model->id_coba; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_coba',
		'nama_coba',
	),
)); ?>
