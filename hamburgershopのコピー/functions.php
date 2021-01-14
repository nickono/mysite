<?php
    //テーマサポート
    // add_theme_support( 'menus' ); //テーマチェックにより外すことに
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'register_nav_menus()' ); //テーマチェックにより新たに追加
    add_theme_support( 'automatic-feed-links' ); //テーマチェックにより新たに追加
    add_theme_support( 'get_avatar' ); //テーマチェックにより新たに追加 
    add_theme_support( "custom-background" ); //テーマチェックにより新たに追加
    add_theme_support( "custom-header" ); //テーマチェックにより新たに追加
    add_editor_style(); 


    //タイトル出力
    function hamburgershop_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburgershop_title' );

    function hamburgershop_script() {
        wp_enqueue_style( 'mplus1p', '//mplus-webfonts.sourceforge.jp/mplus-1m-bold.ttf', array() );
        wp_enqueue_style( 'mplus1p', '//mplus-webfonts.sourceforge.jp/mplus-1m-regular.ttf', array() );
        wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        // wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
        // wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/search-solid.svg', array(), '4.7.0' );
        wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css', array() );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', "", "3.5.1", true );
        wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburgershop_script' );

    //ウィジェットの追加
    function hamburgershop_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburgershop_widgets_init' );

    if ( ! isset( $content_width ) ) {
        $content_width = 1920;
    }