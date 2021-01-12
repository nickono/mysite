<!-- //header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>

    <div class="l-main-container">
        <h2 class="p-h2title"></h2>
        <div class="p-topimage-container">
            <img class="toppage-lg" src="<?php echo get_template_directory_uri(); ?>/images/Top.jpg" />
            <img class="toppage-sm" src="<?php echo get_template_directory_uri(); ?>/images/toppage-sm.png" />
            <p class="dummy-site">ダミーサイト</p>
        </div>
    </div>  
    <div class="p-takeout-eatin-container">
        <div class="takeout-container">
            <a href="<?php echo get_category_link(5); ?>">
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
            </a>
        </div>
        <div class="eatin-container">
            <a href="<?php echo get_category_link(4); ?>">
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
             </a>
        </div>  
    </div>
    <div class="p-map-container">
        <iframe class ="p-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975472317!2d139.7432388508119!3d35.65858048010234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1610331173949!5m2!1sja!2sjp" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="p-info-container">
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
