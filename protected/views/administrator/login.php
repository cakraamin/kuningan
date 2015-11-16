<div class="panel panel-default">
        <p class="panel-heading no-collapse">Login</p>
        <div class="panel-body">
            <?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
                <div class="form-group">
                    <label>Username</label>
                    <?php echo $form->textField($model,'username',array('class'=>'form-control span12')); ?>
					<?php echo $form->error($model,'username'); ?>
                    <!--<input type="text" class="form-control span12">-->
                </div>
                <div class="form-group">
                <label>Password</label>
                	<?php echo $form->passwordField($model,'password',array('class'=>'orm-controlspan12 form-control')); ?>
					<?php echo $form->error($model,'password'); ?>	
                    <!--<input type="password" class="form-controlspan12 form-control">-->
                </div>                
                <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary pull-right')); ?>
                <label class="remember-me">
                	<?php echo $form->checkBox($model,'rememberMe'); ?> Remember me                	
                </label>
                <div class="clearfix"></div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
    <p class="pull-right" style=""><a href="http://www.portnine.com" target="blank" style="font-size: .75em; margin-top: .25em;">Design by Portnine</a></p>
