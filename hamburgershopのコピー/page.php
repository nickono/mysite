<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

    <div class="l-main-container">
        <img class="lg" src="<?php echo get_template_directory_uri(); ?>/images/PC_page-top.png" alt="PC_page-top-image">
        <img class="sm" src="<?php echo get_template_directory_uri(); ?>/images/page-top-sm.png" alt="PC_page-top-image">
        <!-- <h1>ショップについて</h1>  -->
        <h1><?php the_title(); ?></h1> 
    </div>
    <div class="editor-styles-wrapper-page">

    <?php
        if( have_posts() ) ://1.投稿データがあるかの条件分岐。
        while( have_posts() ) :// 2.表示する投稿データがあれば繰り返し処理開始
            the_post();//3.ループ処理に必要なカウント処理等 
    ?>    
        <!-- <div class="editor-styles-wrapper">     -->
          <?php the_content(); ?><!-- 4.「ここに出力したい処理などを記述」-->
        </div>  
        <?php endwhile;// 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
        else://6.投稿データがなければ
        ?>
        <p>表示する記事がありません</p><!-- 7.ない時の処理 -->
        <?php endif; ?><!-- 8.条件分岐終了 -->  

    <!-- </div> -->
      
</main>  

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    