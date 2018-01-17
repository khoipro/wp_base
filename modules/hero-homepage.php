<?php
/**
 * Hero in Frontpage Landing
 */
$image_url = '';
$image = get_field('hero_right_image');
if( !empty($image) ) {
	$image_url = $image['url'];
}
$title = get_field('hero_headline');
$description = get_field('hero_description');
// First CTA Button Text
$first_button_text = get_field('hero_first_button_text');
$first_button_link = get_field('hero_first_button_link');
if( !empty($image_url) || !empty($title) || !empty($description) ) :
?>
	<section class="hero-homepage">
		<div class="hero-homepage__wrapper">
			<div class="hero-homepage__block">
				<div class="container">
					<div class="hero-homepage__inner">
						<?php if( !empty($title) ) : ?>
							<h1 class="hero-homepage__title"><?php echo $title; ?></h1>
						<?php endif; ?>
						<?php if( !empty($description) ) : ?>
							<div class="hero-homepage__description"><?php echo $description; ?></div>
						<?php endif; ?>
						<?php if( !empty($first_button_text) && !empty($first_button_link) ) : ?>
							<footer class="hero-homepage__footer">
								<a class="button-red hero-homepage__button" href="<?php echo $first_button_link; ?>"><?php echo $first_button_text; ?></a>
							</footer>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if( !empty($image_url) ) : ?>
				<figure class="hero-homepage__figure" style="background-image: url('<?php echo $image_url; ?>');"></figure>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
