<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-6">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'gallery-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
      'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>		

		<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
        <label>Jenis Award</label>                				
		<?php echo $form->textField($model,'judul_gallery',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'judul_gallery'); ?>
        </div>

        <div class="form-group">
        <label>File Gambar</label>                		
		<?php //echo $form->textField($model,'nama_award',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo CHtml::activeFileField($model, 'image_gallery'); ?>
        <?php echo $form->error($model,'image_gallery'); ?>
        </div>
        
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="form-group">     
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/images//'.$model->image_gallery,"image",array("width"=>200)); ?>
        </div>
        <?php } ?>
    
        <div class="form-group">
        <label>Nama Award</label>                		
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'desk_gallery',
			'language'=>'en',
			'editorTemplate'=>'basic',
		)); ?>
        </div>

      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>