<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->id_partner,
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id_partner),'linkOptions'=>array('class' => 'edit')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_partner),'confirm'=>'Are you sure you want to delete this item?','class'=>'delete'),),
	//array('label'=>'Manage Partner', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>View Partner #<?php echo $model->id_partner; ?></b></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id_partner',
		'nama_partner',
	),
)); ?>
