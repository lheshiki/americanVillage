<?php get_header(); ?>
  <section class="l-content">
    <h1 class="c-topKv__wrapper">
      <div class="c-topKv__logo">
        <img src="<?php echo get_theme_file_uri('./assets/img/logo.png');?>" alt="">
      </div>
      <?php
      echo do_shortcode('[smartslider3 slider="2"]');
      ?>
      <div class="c-topKv__text">
        <picture>
          <source srcset="<?php echo get_theme_file_uri('./assets/img/visual_text_pc.png');?>" media="(min-width: 750px)">
          <source srcset="<?php echo get_theme_file_uri('./assets/img/visual_text_sp.png');?>" media="(max-width: 749px)">
          <img src="<?php echo get_theme_file_uri('./assets/img/visual_text_pc.png');?>" alt="American Village">
         </picture>
      </div>
    </h1>
    <p class="c-topKv__description">進化し続ける「街」<br class="pc-hide">アメリカンビレッジマガジン</p>
  </section>
  <section class='l-content-body'>
    <h2 class="c-heading">Latest Articles</h2>
    <div class='c-container'>
    <?php 
       if( have_posts() ) :
        while( have_posts() ) :
            the_post();
    ?>
      <a class="c-box" href="<?php the_permalink(); ?>">
        <div class="c-box__img">
        <?php the_post_thumbnail(); ?>
          
        </div>
        <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date"><?php echo get_the_date(); ?></time>
        <p class="c-box__text"><?php the_title(); ?></p>
        <span class="c-box__button">READ MORE</span>
      </a>
    <?php 
      endwhile;
      else :
          ?><p>表示する記事がありません</p><?php
      endif;
    ?>
    </div>
  </section>
  <?php get_footer(); ?>
  <!-- footerここだよ -->