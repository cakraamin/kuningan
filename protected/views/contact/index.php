<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'kontak-form',
  'enableAjaxValidation'=>false,
  'htmlOptions'=>array(
    'class'=>'basic-grey',
  ),
)); ?>
<!--<form action="" method="post" class="basic-grey">          -->
          <label>
              <span>Your Name :</span>              
              <?php echo $form->textField($model,'nama_kontak',array('size'=>60,'maxlength'=>100,'placeholder'=>'Your Full Name')); ?>
          </label>
          
          <label>
              <span>Your Email :</span>              
              <?php echo $form->textField($model,'email_kontak',array('size'=>60,'maxlength'=>100,'placeholder'=>'Valid Email Address')); ?>
          </label>

          <label>
              <span>Phone :</span>              
              <?php echo $form->textField($model,'phone_kontak',array('size'=>60,'maxlength'=>100,'placeholder'=>'Valid Phone Number')); ?>
          </label>

          <label>
              <span>Subject :</span>              
              <?php echo $form->textField($model,'subyek_kontak',array('size'=>60,'maxlength'=>100,'placeholder'=>'Valid Subject')); ?>
          </label>
          
          <label style="margin-top:-5px;">
              <span>Message :</span>              
              <?php echo $form->textArea($model,'komen_kontak',array('rows'=>6, 'cols'=>50,'placeholder'=>'Your Message to Us')); ?>
          </label>   
          <?php if(CCaptcha::checkRequirements()): ?>          
            <?php $this->widget('CCaptcha'); ?>
            <label style="margin-top:-52px; margin-left:-30px;">             
              <?php echo $form->textField($model,'verifyCode',array('class'=>'kecil')); ?>          
              <?php echo $form->error($model,'verifyCode'); ?>
          </label>            
          <?php endif; ?>         
           <label style="margin-bottom:10px; margin-top:20px;">
              <span>&nbsp;</span>
              <?php echo CHtml::submitButton('Submit',array('class' => 'button')); ?>
          </label>    
      <!--</form>-->
      <?php $this->endWidget(); ?>
      <p><?php echo $model->address; ?></p>
      <div class="logos"></div>