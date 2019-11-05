<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><? bloginfo('name'); ?></title>


    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <?php if(get_header_image() == ''){?>
              <h1><a href="<?php get_home_url();?>"><?php bloginfo('name'); ?></a></h1><?php
            }else{?>
              <a href="<?php get_home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="Logo" /></a>
            <?php  } ?>
          </div>

          <div class="col-lg-6 d-flex align-items-center">
            <nav>
              <?php
                if(has_nav_menu('top-menu')){
                  wp_nav_menu(array('theme-location' => 'top-menu' , 'container_class' => 'top-menu-class'));
                }else{
                  echo "Please select a top menu through the dashboard";
                }
              ?>
            </nav>
          </div>

          <div class="col-lg-3 d-flex align-items-center">
            <?php dynamic_sidebar('right-header'); ?>
          </div>

        </div>
      </div>
    </header>
