<?php
/**
 * Hero in Frontpage Landing
 */
$image = get_header_image_tag();
$headline = get_theme_mod('hero_homepage_headline_setting');
$description = get_theme_mod('hero_homepage_description_setting');
// First CTA Button Text
$first_button_text = get_field('hero_first_button_text');
$first_button_link = get_field('hero_first_button_link');
?>
<section class="hero-homepage">
	<div class="hero-homepage__wrapper">
		<div class="hero-homepage__block">
			<div class="container">
				<div class="hero-homepage__inner">
					<h1 class="hero-homepage__title js-hero-headline"><?php echo $headline; ?></h1>
					<div class="hero-homepage__description js-hero-description"><?php echo $description; ?></div>
					<?php if( !empty($first_button_text) && !empty($first_button_link) ) : ?>
						<footer class="hero-homepage__footer">
							<a class="button-red hero-homepage__button" href="<?php echo $first_button_link; ?>"><?php echo $first_button_text; ?></a>
						</footer>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if( !empty($image) ) :
			echo $image;
		endif; ?>
	</div>
</section>
