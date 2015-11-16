<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Sampurna Kuningan</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/jquery.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/jquery.ba-bbq.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/jquery.yiiactiveform.js" type="text/javascript"></script>

        <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>-->


    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Sampurna Kuningan</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo Yii::app()->user->name; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/user/changepassword">My Account</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo Yii::app()->request->baseUrl; ?>/administrator/logout">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="sidebar-nav">
    <ul>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dashboard" class="nav-header" ><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa"></i></a></li>    
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/users" class="nav-header"><i class="fa fa-fw fa-briefcase"></i> Manajemen Users</a></li>
    <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-database"></i> Data<i class="fa fa-collapse"></i></a></li>    
    <?php $cekss = (end(explode("/", Yii::app()->controller->id)) == "partner" || end(explode("/", Yii::app()->controller->id)) == "award")?"in":""; ?>    
    <li><ul class="legal-menu nav nav-list collapse <?php echo $cekss; ?>">
      <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/partner"><span class="fa fa-caret-right"></span> Data Partner</a></li>
      <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/award"><span class="fa fa-caret-right"></span> Data Award</a></li>
    </ul></li>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/gallery" class="nav-header"><i class="fa fa-fw fa-image"></i> Galeri</a></li>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/about" class="nav-header"><i class="fa fa-fw fa-circle"></i> About</a></li>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/address" class="nav-header"><i class="fa fa-fw fa-university"></i> Address</a></li>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/kontak" class="nav-header"><i class="fa fa-fw fa-comment-o"></i> Contact</a></li>
    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/banner" class="nav-header"><i class="fa fa-fw fa-file-image-o"></i> Banner</a></li>
    </ul>
    </div>

    <div class="content">
        <div class="header">
            <div class="stats">    
</div>

            <!--<h1 class="page-title">Dashboard</h1>-->
            <?php if(isset($this->breadcrumbs)):?>
              <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>'<li><a href="'.Yii::app()->homeUrl.'/dashboard">Home</a></li>',
                'tagName'=>'ul',
                'htmlOptions'=>array('class'=>'breadcrumb'),     
                'separator'=>'',           
                'activeLinkTemplate'=>'<li><a href="{url}">{label}</a></li>',
                'inactiveLinkTemplate'=>'<li class="active">{label}</li>',
              )); ?><!-- breadcrumbs -->
            <?php endif?>        

        </div>        
        <?php echo $content; ?>
            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/template/AircraftAdmin/lib/bootstrap/js/bootstrap.js"></script>
</body></html>
