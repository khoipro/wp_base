<article class="article">
	<?php if( is_single() || is_page() ) : ?>
		<h1 class="article__title"><?php the_title(); ?></h1>
	<?php else : ?>
		<h2 class="article__title"><a class="article__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php endif; ?>
</article>
