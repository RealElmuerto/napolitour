<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> <!-- Only use if you have mixed content issues -->
<!-- Schema markup -->


<!-- Meta Pixel Code -->

<!-- End Meta Pixel Code -->


<!-- favicon-->



<!-- Google tag (gtag.js) -->


<!--smartlook-->


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');</style> <!-- manrope -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');</style> <!-- roboto -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Silkscreen:wght@700&display=swap');</style> <!-- silkscreen -->
    <?php wp_head(); ?>
</head>

  <body>
  <div class="container">
     <nav class="navbar navbar-expand-md" role="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>">
      <img height="19px" width="109px" src="<?php bloginfo('template_url'); ?>/img/logocheesegiallo.png"></a>
   

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
    aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler" role="button"><i class="fa fa-bars" style="color:aqua" aria-hidden="true"></i></span>
    </button>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </nav>  
        </div>
</nav>

