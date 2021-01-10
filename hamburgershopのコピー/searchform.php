<!-- <form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
            <input class="search" type="search" name="s" id="s" method="POST" placeholder="&#xf002;" value="<?php if(get_search_query()) echo get_search_query() ?>">
            <input class="p-search-button" id="searchsubmit" type="submit" value="検索">
</form>   -->



<form role="search" method="get" class="p-search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<!-- <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span> -->
		<input type="search" class="search" placeholder="<?php echo esc_attr_x( '&#xf002;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="p-search-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

