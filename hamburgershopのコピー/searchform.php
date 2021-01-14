<form role="search" method="get" class="p-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
	<label>
		<input type="search" class="search" placeholder="<?php echo esc_attr_x( ' &#xf002;', 'placeholder', $domain = 'hamburgershop' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', $domain = 'hamburgershop' ) ?>" />
		<label class="screen-reader-text" for="s"></label>
	</label>
	<input type="submit" class="p-search-button" value="<?php echo esc_attr_x( '検索', 'submit button', $domain = 'hamburgershop' ) ?>" />
</form>

