<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	//array('label'=>'Manage Partner', 'url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>