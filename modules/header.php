<header class="header" data-module-init="header">
	<div class="container">
		<?php if( has_nav_menu('main') ) :
			wp_nav_menu(array(
				'theme_location' => 'main',
				'container' => 'nav',
				'container_class' => 'header__nav',
				'menu_class' => 'header__menu'
			));
		endif; ?>
	</div>
</header>
