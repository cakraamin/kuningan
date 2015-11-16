<?php
/* @var $this Coba2Controller */
/* @var $model Coba2 */

$this->breadcrumbs=array(
	'Coba2s'=>array('index'),
	$model->id_coba=>array('view','id'=>$model->id_coba),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coba2', 'url'=>array('index')),
	array('label'=>'Create Coba2', 'url'=>array('create')),
	array('label'=>'View Coba2', 'url'=>array('view', 'id'=>$model->id_coba)),
	array('label'=>'Manage Coba2', 'url'=>array('admin')),
);
?>

<h1>Update Coba2 <?php echo $model->id_coba; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>