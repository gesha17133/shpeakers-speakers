<?php
/**
 * The Dynamic Sidebar
 *
 * @package My Pack
 */

if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'archive-sidebar' ); ?>
	</div>
<?php endif; ?>
