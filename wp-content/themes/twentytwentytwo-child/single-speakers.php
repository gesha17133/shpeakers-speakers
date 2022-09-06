<?php
/**
 * Speakers Single Template
 *
 * @package My pack
 */

get_header();
?>

<div class="theme-container single-speaker">
	<div class="speaker-info">
		<div class="speaker-info__content">
			<h1 class="speaker-info__name text-l"><?php the_title(); ?></h1>
			<p class="speaker-info__description text-s">
			<?php the_content(); ?>
			</p>
		</div>
		<div class="speaker-info__avatar">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>

	<div class="speaker__sessions">
		<?php if ( have_rows( 'speaker_sessions' ) ) : ?>

			<ul>
				<?php
				while ( have_rows( 'speaker_sessions' ) ) :
					the_row();
					?>
					<li class="text-m text-bold"> <?php echo esc_html( get_sub_field( 'session' ) ); ?> </li>
				<?php endwhile; ?>
			</ul>

		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
