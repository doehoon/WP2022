<html>
<head>
<title>Tutorial theme</title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<div id="ttr_header" class="jumbotron">
<h1>HEADER</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          wp_nav_menu( array(
              'theme_location'    => 'primary',
          ) );
          ?>
      </div>
  </nav>
      <script>
          $('ul').removeClass().addClass('nav navbar-nav');
          $('li').removeClass().addClass('nav-item');
          $('a').addClass('nav-link');
      </script>
   
  </div>
</div>
<div class="container">