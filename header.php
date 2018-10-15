<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href= <?php bloginfo('stylesheet_url') ?> type="text/css">
    <title> <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>

<body>
  <div class="wrapper">
    <!-- Header -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if ( get_header_image() ) { ?>
              <img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php bloginfo('name'); ?>" class="img-circle">
              <div class="website-subtitle"> <?php bloginfo('description'); ?> </div>
            <?php } else { ?>
              <?php bloginfo('name'); ?>
              <br>
              <?php bloginfo('description'); ?>
            <?php } ?>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse navbar-right',
          'container_id' => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav')
        ); ?>
      </div><!-- /.container-fluid -->
    </nav>
