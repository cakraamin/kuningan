<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/f_template'); ?>
<div class="kiri">
        <div class="title"></div>
        <div class="isi">
          <object width="350" height="420" data="<?php echo Yii::app()->request->baseUrl; ?>/uploads/banner/banner.swf"></object>
        </div>        
        <div class="kler"></div>
      </div>
      <div class="kanan">
        <div id="menu">
          <ul>
            <li class="awal"><a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a></li>
            <li class="garis"><a href="<?php echo Yii::app()->request->baseUrl; ?>/abouts">About Us</a></li>
            <li class="garis"><a href="<?php echo Yii::app()->request->baseUrl; ?>/galleries">Gallery Project</a></li>
            <li class="garis"><a href="<?php echo Yii::app()->request->baseUrl; ?>/awards">Award</a></li>
            <li class="garis"><a href="<?php echo Yii::app()->request->baseUrl; ?>/contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="content">
           <div class="jeda"></div>
          <?php echo $content; ?>
        </div>
        <div class="kler"></div>
        </div>        
      </div>
<?php $this->endContent(); ?>