<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <header id="header-id" class="header-content dark-header sticky">
    <nav role="navigation" aria-label="Main menu" id="hamburger-menu">
      <button aria-expanded="false" aria-label="Main menu toggle button"  aria-controls="main-menu" href="#menu" id="menu-toggle" class="menu-toggle" onclick="toggleMenu()">
        <svg aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" stroke="currentColor" d="M4 6h16M4 12h16M4 18h16"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </nav>
    <a class="site-logo" href="/">
      <svg aria-hidden="true" focusable="false"  viewBox="0 0 114 60.000001" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><defs
        id="defs2" /><path
        id="circle44771"
        style="fill-opacity:1;fill-rule:evenodd;stroke-width:0.211123;stroke-linejoin:round;stroke-miterlimit:1.3"
        d="m 87.600001,2 a 27.199997,28 0 0 0 -27.2,28 27.199997,28 0 0 0 27.2,28 27.199997,28 0 0 0 25.087499,-17.2 h -9.71055 a 18.799999,18.799999 0 0 1 -15.376949,8 18.799999,18.799999 0 0 1 -18.8,-18.8 18.799999,18.799999 0 0 1 18.8,-18.8 18.799999,18.799999 0 0 1 15.387109,8 h 9.70742 A 27.199997,28 0 0 0 87.600001,2 Z M 39.2,2.0035156 V 24.530469 34.4 57.973829 a 31.67,31.67 0 0 0 8.4,-6.417188 V 8.4425782 A 31.67,31.67 0 0 0 39.2,2.0035156 Z M 9.6000001,2.0261719 A 31.67,31.67 0 0 0 1.2019531,8.4414063 V 51.558594 a 31.67,31.67 0 0 0 8.398047,6.415235 V 36.494922 25.6 Z M 11.6,25.6 v 8.8 h 25.6 v -8.8 z" />
      </svg>
    </a>
    <?php
      wp_nav_menu( array(
        'theme_location' 	=> 'primary',
        'menu_id' 		 	  => 'main-menu',
        'menu_class' 		  => '',
        'container' 	 	  => 'nav',
        'container_id'    => 'menu-nav',
        'container_class'	=> 'header-menu-container',
        'depth'				    => 2,
        'fallback_cb' 		=> false
      ) );
    ?>
  </header>
