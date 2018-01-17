<?php
/**
 * Hero in Frontpage Landing
 */
$image_url = '';
$image = get_field('hero_image'); // Return url only
$title = get_field('hero_title');
$description = get_field('hero_description');
$button_text = get_field('hero_cta_button_text');
$button_link = get_field('hero_cta_button_link');
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
					<?php if( !empty($button_text) && !empty($button_link) ) : ?>
						<footer class="hero-homepage__footer">
							<a class="button hero-homepage__button" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
						</footer>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if( !empty($image) ) : ?>
			<figure class="hero-homepage__figure" style="background-image: url('<?php echo $image; ?>');"></figure>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>
