<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/f_template'); ?>
      <div class="kiri">
        <div class="titles">
          <span class="logo"></span>
          <p>PT. SAMPURNA KUNINGAN</p>
        </div>
        <div class="isi">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.6207341967339!2d111.14248644126931!3d-6.710763357550964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e772c62b46e8a0b%3A0xdfa18099a12f900a!2sPT.+Sampurna+Kuningan!5e0!3m2!1sen!2sid!4v1423635318250" width="300" height="300" frameborder="0" style="border:0"></iframe>
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
          <?php echo $content; ?>
        </div>
        <div class="kler"></div>
        </div>        
      </div>
<?php $this->endContent(); ?>