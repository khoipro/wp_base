<header class="header" data-module-init="header">
	<div class="container">
		<div class="header__wrapper">
			<?php
			if( function_exists('the_custom_logo') ) {
				the_custom_logo();
			}
			if( has_nav_menu('main') ) :
				wp_nav_menu(array(
					'theme_location' => 'main',
					'container' => 'nav',
					'container_class' => 'header__nav',
					'menu_class' => 'header__menu'
				));
			endif; ?>
		</div>
	</div>
</header>
