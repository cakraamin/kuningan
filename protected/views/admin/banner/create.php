<?php
$this->breadcrumbs=array(  
  'Banner',
);
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-6">
    <br>
    <div id="myTabContent" class="tab-content">      
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'banner-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
      'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>		

		<?php echo $form->errorSummary($model); ?>

        <div class="form-group">
        <label>File Banner</label>                				
		<?php echo CHtml::activeFileField($model, 'image'); ?>
        <?php echo $form->error($model,'image'); ?>
        </div>        
    </div>

    <?php
      if($model->image != ""){
        ?>
        <object width="351" height="410" data="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $model->image; ?>"></object>
        <?php        
      }
    ?>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton('Uploads',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>