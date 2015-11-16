<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Change Password',
);
?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'users-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
		)); ?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
        <label>Old Password</label>        
        <?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'user_name'); ?>
        </div>
        <div class="form-group">
        <label>New Password</label>     
        <?php echo $form->PasswordField($model,'pass_word',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'pass_word'); ?>
        </div>
        <div class="form-group">
        <label>Confirm Password</label>        
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
        </div>
               
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>
</div>