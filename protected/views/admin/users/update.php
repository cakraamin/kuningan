<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id_user),'linkOptions'=>array('class' => 'view')),
	//array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>Update Users <?php echo $model->id_user; ?></b></h3>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>