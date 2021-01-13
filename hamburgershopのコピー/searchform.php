<form role="search" method="get" class="p-search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<!-- <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span> -->
		<input type="search" class="search" placeholder="<?php echo esc_attr_x( ' &#xf002;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="p-search-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

