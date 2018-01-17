<?php
/**
 * Front-page Landing template
 */
get_header();

while( have_posts() ) : the_post();

	get_template_part('modules/hero', 'homepage');

endwhile;

get_footer();
?>
