<?php
/**
 * Template Name: Speakers Archive Page
 *
 * @package Package for PHPcs :)
 */

get_header();
?>

<div class="theme-container speakers-container">
	<div class="archive__widget-area">
		<?php get_sidebar( 'archive-sidebar' ); ?>
	</div>
	<div class="archive__content-area">
		<div class="loop-speakers">
			<?php
			$args = array(
				'post_type'      => 'speakers',
				'posts_per_page' => 10, // I like -1 :).
			);

			$data = new WP_Query( $args );
			?>
			<?php
			get_template_part(
				'template-parts/posts-loop',
				null,
				array(
					'data'        => $data,
					'template-id' => 'speakers-loop-section',
				)
			);
			?>
		</div>
	</div>
</div>

<?php
get_footer();
