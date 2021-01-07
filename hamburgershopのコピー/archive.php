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
        <!-- <div class="cheeseburger-container"> -->
          <!-- <img src="images/cheeseburger2-crop.png"> -->
          <!-- <div class="cheeseburger-container-right"> -->

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="cheeseburger-container">
      <?php the_post_thumbnail( $size, $attr ); ?>
      <div class="cheeseburger-container-right">
        <h2><?php the_title(); ?></h2>
        <p <?php post_class(); ?>><?php the_content(); ?></p>
        <button><a href="<?php echo get_page_link( ); ?>">詳しく見る</a></button>
      </div> 
    </div>
  <?php endwhile;?>
<?php endif; ?>
                
            
           
        
        
        <div class="pager">
          <span class="md">page&nbsp;1/10&nbsp;&nbsp;&nbsp;&nbsp;＜&nbsp;＜</span>
          <span class="sm-left">＜＜&nbsp;&nbsp;前へ</span>
          <span class="sm-right">次へ&nbsp;&nbsp;＞＞</span>
          <ul>
            <li class="one">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li class="ten">10</li>
          </ul>
          <span class="md">＞＞</span>
        </div>
      </main>  

      <!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    

      <!-- <aside class="l-sidebar-container">
        <i class="fa fa-times fa-5x" id="my-cross" aria-hidden="true"></i>
        <ul class="p-menu-container">
          <li class="burger">バーガー
            <ul clas="p-burger-container">
              <li class="hamburger">ハンバーガー</li>
              <li>チーズバーガー</li>
              <li>テリヤキバーガー</li>
              <li>アボガドバーガー</li>
              <li>フィッシュバーガー</li>
              <li>ベーコンバーガー</li>
              <li>チキンバーガー</li>
            </ul>
          </li>   
          <li class="side">サイド    
            <ul clas="p-side-container">
              <li>ポテト</li>
              <li>サラダ</li>
              <li>ナゲット</li>
              <li>コーン</li>
            </ul>
          </li>     
          <li class="beverage">ドリンク   
            <ul clas="p-drink-container">
              <li>コーラ</li>
              <li>ファンタ</li>
              <li>オレンジ</li>
              <li>アップル</li>
              <li>紅茶 (Ice/Hot)</li>
              <li>コーヒー (Ice/Hot)</li>
            </ul> 
          </li>   
        </ul>
      </aside> 
    </div>
    <footer class="l-footer-container">
      <p>ショップ情報 | ヒストリー</p>
      <small class="copyright">Copyright: RaiseTech</small>
    </footer>
    <script src="js/script.js"></script>  
  </body>     
</html>
   -->