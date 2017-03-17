<?php
/*
Template Name: Search form
*/
?><!-- search -->
<byu-search slot="search" action="<?php echo home_url(); ?>" role="search" class="search" method="get">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Search site', 'byu2017_wp' ); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'byu2017_wp' ); ?></button>
</byu-search>
<!-- /search -->
