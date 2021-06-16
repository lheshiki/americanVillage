<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>American Village</title> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
  <div class="l-content">
    <div class="c-hamburger">
      <span class="c-hamburger__line"></span>
    </div>
    <?php wp_nav_menu();?>
  </div>
</header>
