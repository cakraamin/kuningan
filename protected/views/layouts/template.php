<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/t_main'); ?>
        <div class="main-content">
          <?php if(isset($this->menu)):?>
            <?php $this->widget('zii.widgets.CMenu', array(
              'items'=>$this->menu,              
              'htmlOptions'=>array('class'=>'ist-toolbar'),
            )); ?>
            <?php endif?>            
          <?php echo $content; ?>
        </div>
<?php $this->endContent(); ?>