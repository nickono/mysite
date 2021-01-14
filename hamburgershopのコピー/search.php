<?php get_header(); ?>

    <section class="p-3-burgers-container">
        <img class="lg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/3-burgers.png">
        <img class="sm" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-topimage.png">
        <h2>Search: 
            <span class="span-lg">
                <!-- 検索ワードを出力 -->
                <?php the_search_query(); ?>
            </span>
            <span  class="span-sm">
                <br><?php the_search_query(); ?>
            </span>
        </h2> 
    </section>  
<div id="contents">
    <div class="search_results">
        <?php if(have_posts()): ?> 
        <?php while(have_posts()): the_post(); ?>
            <div class="cheeseburger-container">
                <?php the_post_thumbnail(); ?>
                <div class="cheeseburger-container-right">
                <section id="post-<?php the_ID(); ?>" <?php post_class( 'archive' ); ?>>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </section>  
                    <button><a class="detail" href="<?php echo get_page_link( ); ?>">詳しく見る</a></button>
                </div> 
            </div>
        <?php endwhile; ?>
        <!-- 検索ワードに該当する記事がない場合の処理-->
        <?php else: ?>
            <h2 class="not-found">検索結果が見つかりませんでした</h2>
        <?php endif;  ?>
    </div><!-- end of .search_results -->
</div><!-- end of #content -->

<?php wp_pagenavi(); ?>

</main> 

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    