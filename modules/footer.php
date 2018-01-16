<footer class="footer">
	<div class="container">
		<div class="footer__row">
			<p class="copyright"><?php _e('Copyright ' . get_the_date('Y') . ' by ' . get_bloginfo('name') . '. All right reserved.', 'wp_base'); ?></p>
		</div>
		<?php if( has_nav_menu('social') ) :
			wp_nav_menu(array(
				'theme_location' => 'social',
				'container' => 'div',
				'container_class' => 'footer__row',
				'menu_class' => 'footer__social-menu'
			));
		endif; ?>
	</div>
</footer>
