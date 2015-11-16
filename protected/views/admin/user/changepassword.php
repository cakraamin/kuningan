<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
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
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
		)); ?>
    <?php
        foreach(Yii::app()->user->getFlashes() as $key => $message) {
            echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
        }
    ?>
		<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
        <label>Old Password</label>        
        <?php echo $form->PasswordField($model, 'currentPassword',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
        <?php echo $form->error($model,'currentPassword'); ?>
        </div>
        <div class="form-group">
        <label>Password</label>     
        <?php echo $form->PasswordField($model, 'newPassword',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
        <?php echo $form->error($model,'newPassword'); ?>
        </div>
        <div class="form-group">
        <label>Confirm Password</label>        
        <?php echo $form->PasswordField($model, 'newPassword_repeat',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
        <?php echo $form->error($model,'newPassword_repeat'); ?>
        </div>      
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton('Change Password',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>
</div>