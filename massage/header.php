<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php  echo get_template_directory_uri() . '/img/favicon.ico';?>">

    <title>Массаж</title>
   
    <!-- Bootstrap core CSS -->
   

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
   
 <?php wp_head(); ?>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container navigation-menu">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container ">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div id="navbar" class="navbar-collapse collapse ">
            <?php if ( has_nav_menu( 'top' ) ) : ?>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'top',
                'container_class' => '',
                'menu_class' => 'nav-menu nav navbar-nav ',
                
              ) );
            ?>
            <?php endif; ?>
             
            </div>
          </div>
        </nav>

      </div>
    </div>
    <?php get_template_part('slider','carousel'); ?>