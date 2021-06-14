<?php 
//テーマサポート
  add_theme_support( 'menus' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' ); //新たに追加

//タイトル出力
  function americanVillage_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
        return $title;
    }
add_filter( 'pre_get_document_title', 'americanVillage_title' );

function americanVillage_script() {
  // wp_enqueue_style( 'reset', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
  // wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
  // wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', array());
  wp_enqueue_style( 'AmericanVillage', get_template_directory_uri() . '/assets/css/style.css', array(),null);
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(),null);
}
add_action( 'wp_enqueue_scripts', 'americanVillage_script' );

?>