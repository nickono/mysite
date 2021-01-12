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
</aside>
</div>