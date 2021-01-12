<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

    <section class="p-3-burgers-container">
        <img class="lg" src="<?php echo get_template_directory_uri(); ?>/images/3-burgers.png">
        <img class="sm" src="<?php echo get_template_directory_uri(); ?>/images/archive-topimage.png">
        <h2>Menu: 
            <span class="span-lg">
                <?php single_cat_title( '', true ); ?>
            </span>
            <span  class="span-sm">
                <br><?php single_cat_title( '', true ); ?>
            </span>
        </h2> 
    </section>    
    <section class="mainVisual">
        <h2 class="mainVisual-h2">小見出しが入ります</h2>
        <div class="mainVisual-text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </div>
    </section>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="cheeseburger-container">
            <?php the_post_thumbnail( $size, $attr ); ?>
            <div class="cheeseburger-container-right">
            <section id="post-<?php the_ID(); ?>" <?php post_class( 'archive' ); ?>>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </section>  
                <button><a class="detail" href="<?php echo get_page_link( ); ?>">詳しく見る</a></button>
          </div> 
        </div>
    <?php endwhile;?>
<?php endif; ?>
  
<?php wp_pagenavi(); ?>
                
</main>   

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    
