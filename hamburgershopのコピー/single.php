<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

<div class="l-main-container">
    <h1><?php the_title(); ?></h1> 
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <div class="editor-styles-wrapper-single">
                <p <?php post_class('burger'); ?>><?php the_content(); ?></p>
                <p><?php the_tags(''); ?></p>
        <?php endwhile;?> 
        <?php endif; ?>
            </div>
</div>
     
      </main>    

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    