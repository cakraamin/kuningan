<?php
/* @var $this PartnerController */
/* @var $model Partner */
/* @var $form CActiveForm */
?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'partner-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
		)); ?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
        <label>Partner</label>                
		<?php echo $form->textField($model,'nama_partner',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nama_partner'); ?>
        </div>      
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>