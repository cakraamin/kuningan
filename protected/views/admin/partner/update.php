<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->id_partner=>array('view','id'=>$model->id_partner),
	'Update',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id_partner),'linkOptions'=>array('class' => 'edit')),
	//array('label'=>'Manage Partner', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>Update Partner <?php echo $model->id_partner; ?></b></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>