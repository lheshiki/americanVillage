<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>American Village</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('./assets/css/reset.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('./assets/css/style.css');?>">
</head>
<body>
  <?php get_header(); ?>
  <!-- headerナビここくるよ -->
  <section class="l-content">
    <h1 class="c-topKv__wrapper">
      <div class="c-topKv__content">
        <picture>
          <source srcset="<?php echo get_theme_file_uri('./assets/img/visual_1_pc.png');?>" media='(min-width: 751px)'>
          <source srcset="<?php echo get_theme_file_uri('./assets/img/visual_1_sp.png');?>" media='(max-width: 750px)'>
          <img src="<?php echo get_theme_file_uri('./assets/img/visual_1_pc.png');?>" alt="アメリカンビレッジ" class="c-topKv__img">
        </picture>
        <div class="c-topKv__logo">
          <img src="<?php echo get_theme_file_uri('./assets/img/logo.png');?>" alt="">
        </div>
        <div class="c-topKv__text">
          <img src="<?php echo get_theme_file_uri('./assets/img/visual_text_pc.png');?>" alt="">
        </div>
      </div>
    </h1>
    <p class="c-topKv__description">進化し続ける「街」アメリカンビレッジマガジン</p>
  </section>
  <section class='l-content-body'>
    <h2 class="c-heading">Latest Articles</h2>
    <div class='c-container'>
        <div class="c-box">
         <a href="#">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_1.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018 / 5 / 20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span class="c-box__button">READ MORE</span>
          </a>
        </div>
      <div class="c-box">
        <div class="c-box__img">
          <img src="<?php echo get_theme_file_uri('./assets/img/post_img_2.png');?>" alt="">
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
        <p class="c-box__text">おしゃれカフェがありますよ</p>
        <a href="#" class="c-box__button">READ MORE</a>
      </div>
      <div class="c-box">
        <div class="c-box__img">
          <img src="<?php echo get_theme_file_uri('./assets/img/post_img_3.png');?>" alt="">
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
        <p class="c-box__text">おしゃれカフェがありますよ</p>
        <a href="#" class="c-box__button">READ MORE</a>
      </div>
      <div class="c-box u-mt-30">
        <div class="c-box__img">
          <img src="<?php echo get_theme_file_uri('./assets/img/post_img_4.png');?>" alt="">
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
        <p class="c-box__text">おしゃれカフェがありますよ</p>
        <a href="#" class="c-box__button">READ MORE</a>
      </div>
      <div class="c-box u-mt-30">
        <div class="c-box__img">
          <img src="<?php echo get_theme_file_uri('./assets/img/post_img_5.png');?>" alt="">
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
        <p class="c-box__text">おしゃれカフェがありますよ</p>
        <a href="#" class="c-box__button">READ MORE</a>
      </div>
      <div class="c-box u-mt-30">
        <div class="c-box__img">
          <img src="<?php echo get_theme_file_uri('./assets/img/post_img_6.png');?>" alt="">
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
        <p class="c-box__text">おしゃれカフェがありますよ</p>
        <a href="#" class="c-box__button">READ MORE</a>
      </div>
      
      
    </div>
  </section>
  <?php get_footer(); ?>
  <!-- footerここだよ -->
</body>
</html>