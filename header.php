<?php
/**
 * Header File
 * 
 * @package yttheme
 */

 ?>

<!DOCTYPE html>
<!-- load language -->
<html lang="<?php language_attributes(); ?>">
<head>
  <!-- load charset -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- load head -->
  <?php wp_head(); ?>
</head>
<!-- load body class -->
<body <?php body_class('site'); ?>>
  <!--  Load custom scripts -->
  <!-- Cross compatibility check -->
  <?php 
    if(function_exists('wp_body_open')) {
      wp_body_open();
    }
  ?>
  <header>Header</header>