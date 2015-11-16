<?php
/* @var $this AwardController */
/* @var $model Award */
/* @var $form CActiveForm */
?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'award-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
		)); ?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
        <label>Jenis Award</label>                		
		<?php echo $form->dropDownList($model,'id_jenis_award',array('0' => 'Tribute', '1' => 'Press News'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_jenis_award'); ?>
        </div>

        <div class="form-group">
        <label>Nama Award</label>                		
		<?php echo $form->textField($model,'nama_award',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nama_award'); ?>
        </div>

      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>