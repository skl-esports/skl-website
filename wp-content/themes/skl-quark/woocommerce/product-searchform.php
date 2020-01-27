<form role="search" method="get" class="search-form woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'quark-progression' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'quark-progression' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'quark-progression' ); ?>" />
	<input class="search-submit" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'quark-progression' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>
