<!doctype html>
<html lang="<?php language_attributes(); ?>"> <!--//言語設定を自動的に出力します-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="http://mplus-webfonts.sourceforge.jp/mplus-1m-bold.ttf" rel="stylesheet"> -->
    <!-- <link href="http://mplus-webfonts.sourceforge.jp/mplus-1m-regular.ttf" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <?php 
    // wp_enqueue_script('jquery');
    // wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/script.js');
    wp_head(); 
    ?> 
  </head>
  <body <?php body_class(); ?>>
    <div class="l-largest-wrapper">
      <div class="l-black-screen"></div>
      <main class="l-main-wrapper"> 
        <header class="l-header-container">
          <h2 id="h2title">Menu</h2>
          <h1 class="header__ttl">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
          </h1>
          <p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
          <?php get_search_form(); ?>
          <?php //wp_nav_menu(); ?>
        </header>

<!-- bloginfo( 'name') //管理画面の設定 ＞ 一般 にある「サイトのタイトル」を取得して表示
home_url( '/' );  //現在のブログのホームURLを取得します。そのままですると '/' (スラッシュ)が付かないで、 `/` を付けて出力しています。
bloginfo( 'description' ); //管理画面の設定 ＞ 一般 にある「キャッチフレーズ」を取得して表示 -->