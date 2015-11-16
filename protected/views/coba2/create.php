<?php
/* @var $this Coba2Controller */
/* @var $model Coba2 */

$this->breadcrumbs=array(
	'Coba2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coba2', 'url'=>array('index')),
	array('label'=>'Manage Coba2', 'url'=>array('admin')),
);
?>

<h1>Create Coba2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>