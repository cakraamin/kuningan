<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id_user),'linkOptions'=>array('class' => 'edit')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?','class'=> 'delete')),
	//array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>View Users #<?php echo $model->id_user; ?></b></h3>
<?php
	$levele = array('User','Admin');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id_user',
		'user_name',		
		'date',
		'email',
		array(
	    	'label' => 'Level User',
	      	'value' => $levele[$model->level_id],
	    ),
	),
)); ?>
