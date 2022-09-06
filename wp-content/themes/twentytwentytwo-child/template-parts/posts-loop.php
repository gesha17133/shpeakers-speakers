<?php
/**
 * This is TheLoop :)
 *
 * @package My Pack
 */

$data = $args['data'];
?>
<div class="loop-speakers">

	<?php if ( $data->have_posts() ) : ?>

		<?php while ( $data->have_posts() ) : ?>
			<?php $data->the_post(); ?>

			<div class="speaker_card">
				<div class="speaker-avatar">
					<?php the_post_thumbnail(); ?>
				</div>
				<h1 class="speaker_name"><?php the_title(); ?></h1>
				<p class="country-terms-list">
					Country
					<?php echo get_the_term_list( get_the_ID(), 'country', '', ',' ); ?>
				</p>
				<p class="country-terms-list">
					Position
					<?php echo get_the_term_list( get_the_ID(), 'position', '', ',' ); ?>
				</p>

			</div>

		<?php endwhile; ?>

	<?php else : ?>
		<div><?php esc_html_e( 'There is No speakers', 'twenty-twenty-child' ); ?></div>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
</div>
