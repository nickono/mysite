<aside class="l-sidebar-container">
<i class="fa fa-times fa-5x" id="my-cross" aria-hidden="true"></i>
    <?php
        if ( is_active_sidebar( 'category_widget' ) ) :
            dynamic_sidebar( 'category_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>  

    <!-- <a href="<?php //echo get_template_directory_uri(); ?>/archive.php">バーガー</a> -->
        
        <!-- <ul class="p-menu-container">
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
        </ul> -->
      </aside>
    </div>