<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id_gellery=>array('view','id'=>$model->id_gellery),
	'Update',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('index'),'linkOptions'=>array('class' => 'home')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id_gellery),'linkOptions'=>array('class' => 'edit')),
	//array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>
<div class="clearfix"></div>
<h3><b>Update Gallery <?php echo $model->id_gellery; ?></b></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>