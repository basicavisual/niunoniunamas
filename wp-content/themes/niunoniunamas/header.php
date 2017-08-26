<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Lobster+Two" rel="stylesheet">

      <?php wp_head();?>
  </head>
    <body>
  <header>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/public/logo.png" class="logo" alt="logo"></a>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1 class="header-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
    <nav class="navbar">
        <a href="#">Editoriales</a>
        <a href="#">Quienes Somos</a>
        <a href="#">Contacto</a>
        <a href="#">Feminicidios</a>
    </nav>
  </header>
