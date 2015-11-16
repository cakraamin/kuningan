<?php
/* @var $this Coba2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coba2s',
);

$this->menu=array(
	array('label'=>'Create Coba2', 'url'=>array('create')),
	array('label'=>'Manage Coba2', 'url'=>array('admin')),
);
?>

<h1>Coba2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
