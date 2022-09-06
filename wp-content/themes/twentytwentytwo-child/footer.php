<?php
/**
 * This is Footer of your website
 * Sorry I didn add footer Nav Menu and didt add translation strings
 *
 * @package My Pack
 */

?>
<footer class="theme-container footer-container">
	<div class="footer-content__wrapper">
		<div class="footer-content">
			<div class="footer__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="footer_navigation">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Speakers</a></li>
					<li><a href="">Schedule</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</div>
			<div class="footer_cta">
				<a href="#register" class="theme-content__cta text-dark text-bold text-xs">
					Register
				</a>
			</div>
		</div>
		<div class="footer__logo_creator">
			<img src="<?php echo esc_attr( get_stylesheet_directory_uri() . '/assets/img/Group.png' ); ?>" alt="">
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
