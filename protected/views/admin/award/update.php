<?php
/* @var $this AwardController */
/* @var $model Award */

$this->breadcrumbs=array(
	'Awards'=>array('index'),
	$model->id_award=>array('view','id'=>$model->id_award),
	'Update',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id_award),'linkOptions'=>array('class' => 'edit')),
	//array('label'=>'Manage Award', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>Update Award <?php echo $model->id_award; ?></b></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>