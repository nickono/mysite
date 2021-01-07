<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

        <div class="l-main-container">
          <img class="lg" src="<?php echo get_template_directory_uri(); ?>/images/PC_page-top.png" alt="PC_page-top-image">
          <img class="sm" src="<?php echo get_template_directory_uri(); ?>/images/page-top-sm.png" alt="PC_page-top-image">
          <!-- <h1>ショップについて</h1>  -->
          <h1><?php the_title(); ?></h1> 
        </div>

    <?php
        if( have_posts() ) ://1.投稿データがあるかの条件分岐。
        while( have_posts() ) :// 2.表示する投稿データがあれば繰り返し処理開始
            the_post();//3.ループ処理に必要なカウント処理等 
            ?>    
        <div class="editor-styles-wrapper">    
          <?php the_content(); ?><!-- 4.「ここに出力したい処理などを記述」-->
        </div>  
        <?php endwhile;// 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
        else://6.投稿データがなければ
        ?>
    <p>表示する記事がありません</p><!-- 7.ない時の処理 -->
    <?php endif; ?><!-- 8.条件分岐終了 -->  



              
          <!-- <section>
          <h2>見出しh2</h2>
          <p id="p-tag-text1">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
          <h3 class="title3">見出しh3</h3>
          <h4 class="title4">見出しh4</h4>
          <h5 class="title5">見出しh5</h5>
          <h6 class="title6">見出しh6</h6>
        </section>         
        <div class="Blockquote">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
          <p class="source">出典元： ○○○○○○○○○○○○</p>
        </div>
        <div class="p-cheese-middle-container">    
          <img src="images/cheese-middle.png">
        </div>  
        <div class="p-cheese-bottom-container-first">
          <img class="first" src="images/cheese-bottom.png">
          <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
        </div>  -->
        <!-- <div class="p-cheese-bottom-container-second">
          <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
          <img class="second" src="images/cheese-bottom.png">
        </div> -->
        <!-- <div class="cheese-bottom">
          <div>
            <img class="cheese-bottom-one" src="images/cheese-bottom.png">
          </div>
        </div> -->
        <!-- <div class="grid">  
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
          <div class="item">
            <img src="images/cheese-bottom.png">
          </div>
        </div> -->
        <!-- <div class="list">
          <p id="list-1">1.リストリストリスト<br>2.リストリストリスト</p>
          <p class="list-2">1.リスト2リスト2リスト2<br>2.リスト2リスト2リスト2</p>
          <p class="list-3">1.リストリストリスト<br>2.リストリストリスト</p>
          <p class="list-4">リストリストリスト<br>リストリストリスト</p>
          <p class="list-5">リスト2リスト2リスト2<br>リスト2リスト2リスト2</p>
          <p class="list-6">リストリストリスト<br>リストリストリスト</p>
        </div>   -->
        <!-- <div class="html-tag">
          <ul>
            <li>&lt;html&gt;</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;</li>    
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;</li>    
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;</li>    
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;</li>    
            <li>&lt;/html&gt;</li>
          </ul>
        </div> -->
        <!-- <table>
          <tr>
            <td class="table-l">テーブル</td><td class="table-r">テーブル</td>
          </tr>
          <tr>
            <td class="table-l">テーブル</td><td class="table-r">テーブル</td>
          </tr>
          <tr>
            <td class="table-l">テーブル</td><td class="table-r">テーブル</td>
          </tr>
          <tr>
            <td class="table-l">テーブル</td><td class="table-r">テーブル</td>
          </tr>
        </table> -->
        <!-- <button>ボタン</button>
        <small>boldboldboldboldboldboldbold</small> -->
      </main>  

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    