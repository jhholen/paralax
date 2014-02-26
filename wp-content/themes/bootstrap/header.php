<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
   <div id="wrapper">



    <div id="scroller">
   <div class="container-bg">
   <ul id="scene" class="scene">
            <li class="layer mb" data-depth="0.10"><div class="background"></div></li>
            <!-- <li class="layer footer_img" data-depth="0.30"><img src="<?php echo get_template_directory_uri();?>/img/test-drive.jpg"></li> -->
    
        </ul>
   </div>



   <div class="container">


              <nav class="navbar navbar-default" role="navigation"> 
          <!-- Brand and toggle get grouped for better mobile display --> 
            <div class="navbar-header"> 
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button> 
            </div> 
            <!-- Collect the nav links, forms, and other content for toggling --> 
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
              <?php /* Primary navigation */
          wp_nav_menu( array(
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
          );
          ?>

            </div>
          </nav>
    </div>
    <!-- End Header. Begin Template Content -->