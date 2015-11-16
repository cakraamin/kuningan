<?php
/* @var $this AwardController */
/* @var $model Award */

$this->breadcrumbs=array(
	'Awards'=>array('index'),
	$model->id_award,
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id_award),'linkOptions'=>array('class' => 'edit')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_award),'confirm'=>'Are you sure you want to delete this item?','class'=>'delete')),
	//array('label'=>'Manage Award', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>View Award #<?php echo $model->id_award; ?></b></h3>
<?php
	$awarde = array('Tribute','Press News');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id_award',
		array(
	    	'label' => 'Jenis Award',
	      	'value' => $awarde[$model->id_jenis_award],
	    ),
		'nama_award',
	),
)); ?>
