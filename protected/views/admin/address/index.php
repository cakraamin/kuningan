<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'About',
);
?>

<h3><b>Address</b></h3>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-6">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'address-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>true,
      'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>
    
        <div class="form-group">
        <label>Nama Award</label>                		
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'address',
			'language'=>'en',
			'editorTemplate'=>'basic',
		)); ?>
        </div>

      </div>
    </div>

    <div class="btn-toolbar list-toolbar">      
      <?php echo CHtml::submitButton('Simpan',array('class' => 'btn btn-primary'));
      ?>
    </div>
  </div>
  <?php $this->endWidget(); ?>

<?php endif; ?>