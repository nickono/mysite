<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

        <div class="l-main-container">
          <h2 class="p-h2title"></h2>
          <div class="p-topimage-container">
            <img class="toppage-lg" src="<?php echo get_template_directory_uri(); ?>/images/Top.jpg" />
            <img class="toppage-sm" src="<?php echo get_template_directory_uri(); ?>/images/toppage-sm.png" />
            <p>ダミーサイト</p>
          </div>
        </div>  
        <div class="p-takeout-eatin-container">
          <div class="takeout-container">
            <h2 class="p-h2title">Take Out<br>__</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/three-burgers-on-brown-wooden-tray-between-white-ceramic-1841108.png">
            <div class="p-info1-container">
              <p>小見出しが入ります</p>
              <div class="p-info1-text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
            </div>
            <div class="p-info2-container">
              <p>小見出しが入ります</p>
              <div class="p-info2-text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
            </div>
          </div>
          <div class="eatin-container">
            <h2 class="p-h2title">Eat In<br>__</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/EatIn.png">
            <div class="p-info3-container">
              <p>小見出しが入ります</p>
              <div class="p-info3-text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
            </div>
            <div class="p-info4-container">
              <p>小見出しが入ります</p>
              <div class="p-info4-text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
            </div>
          </div>  
        </div>
        <div class="p-map-container">
          <img class="p-map" src="<?php echo get_template_directory_uri(); ?>/images/map.png">
          <div class="p-info-container">
            <!-- <img class="p-info-inner" src="images/background-gray.png"> -->
            <p>見出しが入ります<br>____</p>
            <div class="p-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
          </div>
        </div>
      </main>

<!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）  -->
<?php get_sidebar(); ?>

<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>    