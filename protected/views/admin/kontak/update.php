<?php
/* @var $this KontakController */
/* @var $model Kontak */

$this->breadcrumbs=array(
	'Kontaks'=>array('index'),
	$model->id_kontak=>array('view','id'=>$model->id_kontak),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kontak', 'url'=>array('index')),
	array('label'=>'Create Kontak', 'url'=>array('create')),
	array('label'=>'View Kontak', 'url'=>array('view', 'id'=>$model->id_kontak)),
	array('label'=>'Manage Kontak', 'url'=>array('admin')),
);
?>

<h1>Update Kontak <?php echo $model->id_kontak; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>