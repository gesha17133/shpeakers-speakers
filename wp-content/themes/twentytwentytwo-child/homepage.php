<?php
/**
 * Template Name: Home
 *
 * @package My Pack
 */

get_header();
?>
<section class="theme-container hero">

	<div class="theme__hero-banner">
		<p class="hero__subtitle text-gray text-s text-bold">
			<?php the_field( 'hero_subtitle' ); ?>
		</p>

		<h1 class="hero__title text-xl text-gray text-super-bold">
			<?php the_field( 'hero_title' ); ?>
		</h1>

		<p class="hero__description text-lightgray text-m text-light">
			<?php the_field( 'hero_description' ); ?>
		</p>
		<?php $hero = get_field( 'hero_cta' ); ?>
		<a href="<?php echo esc_url( $hero['link'] ); ?>" class="theme__button dark-button">
			<?php echo esc_html( $hero['text'] ); ?>
		</a>

	</div>

</section>	

<section class="theme-container content-section">

	<div class="theme-content__left-aligner">
		<div class="theme-content__thumbnail">
			<img src="<?php echo esc_url( get_field( 'welcome_image' ) ); ?>" alt="doctor">
		</div>

		<div class="theme-content__text">
			<h3 class="theme-content__title text-l text-super-bold text-gray">
				<?php the_field( 'welcome_title' ); ?>
			</h3>

			<p class="theme-content__description text-m text-gray">
				<?php the_field( 'welcome_description' ); ?>
			</p>

			<a href="#leader-more" class="theme-content__cta text-dark text-bold text-xs">
				<?php echo esc_html_e( 'Learn more', 'twenty-twenty-child' ); ?>
			</a>
		</div>
	</div>

</section>

<?php
get_footer();
