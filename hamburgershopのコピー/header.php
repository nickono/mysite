<!doctype html>
<html lang="<?php language_attributes(); ?>"> <!--//言語設定を自動的に出力します-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
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
                </header>
