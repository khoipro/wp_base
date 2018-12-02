<?php
$footer_copyright_text = get_theme_mod('footer_copyright_text_setting');
?>
<footer class="footer">
	<div class="container">
		<div class="footer__row">
			<p class="footer__copyright js-footer-copyright-text"><?php echo $footer_copyright_text; ?></p>
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
