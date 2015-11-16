<?php
/* @var $this AwardController */
/* @var $model Award */

$this->breadcrumbs=array(
	'Awards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	//array('label'=>'Manage Award', 'url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>