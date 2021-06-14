<?php get_header(); ?>
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
      <!-- <img src="<?php echo get_theme_file_uri('./assets/img/post_img_1.png');?>" alt=""> -->
        <!-- <a class="c-box">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_2.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span href="#" class="c-box__button">READ MORE</span>
        </a>
        <a class="c-box">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_3.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span href="#" class="c-box__button">READ MORE</span>
        </a>
        <a class="c-box u-mt-30">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_4.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span href="#" class="c-box__button">READ MORE</span>
        </a>
        <a class="c-box u-mt-30">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_5.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span href="#" class="c-box__button">READ MORE</span>
        </a>
        <a class="c-box u-mt-30">
            <div class="c-box__img">
              <img src="<?php echo get_theme_file_uri('./assets/img/post_img_6.png');?>" alt="">
            </div>
            <time datetime="2018-05-20" itemprop="datepublished" class="c-box__date">2018/5/20</time>
            <p class="c-box__text">おしゃれカフェがありますよ</p>
            <span href="#" class="c-box__button">READ MORE</span>
        </a> -->
    </div>
  </section>
  <?php get_footer(); ?>
  <!-- footerここだよ -->
</body>
</html>