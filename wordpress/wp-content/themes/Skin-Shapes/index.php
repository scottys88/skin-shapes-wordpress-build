<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
				<div class="container-fluid">
			<div class="row hero-area">
				<div class="col-xs-12 hero-heading col-md-12"><h1><?php bloginfo('name'); ?></h1><img src=<?php the_post_thumbnail('full'); ?>
				</div>
			</div>

	
		<div class="row intro">
				<div class="col-md-5 offset-md-1 intro-para">
					<h2 class="intro-heading"><?php the_field('home_intro_heading'); ?></h2>
					<p class="intro-text">
						<?php the_content(); ?>
					</p>
				</div>
				<div class="col-md-4 offset-md-1 intro-image-container">
					<img class="intro-image" src="<?php the_field('home_intro_image');?>">
				</div>
			</div>
			<div class="row product-intro-text">
				<div class="col-md-5 offset-md-1">
					<h4><?php the_field('images_intro_heading'); ?></h4>
					<p><?php the_field('images_intro_text'); ?> </p>
				</div>
			</div>
			<div class="row product-row">
				<div class="col-md-12 img-container-1" style="background-image: url(<?php the_field('product_image_full_width'); ?>);">
				</div>
			</div>
			<div class="row product-row">
				<div class="col-md-6 img-container-2" style="background-image: url(<?php the_field('product_image_left'); ?>);">
				</div>
				<div class="col-md-6 img-container-3" style="background-image: url(<?php the_field('product_image_right'); ?>);">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 offset-md-5 view-more-btn">
					<a class="btn btn-primary primary-btn-override" href="#" style="margin-bottom:4px;white-space: normal;">Shop now</a>
				</div>
			</div>
			<div class="row slider-heading-container">
				<div class="col-md-5 offset-md-1 slider-heading">
					<h3><?php the_field('insta_feed_text'); ?></h3>
				</div>
			</div>

			<div class="row slider-container" id="slider-container">
				<!--<div>
					<img src="img/20905178_298813743927719_526571709273210880_n.jpg">
				</div>
				<div>
					<img src="img/21041451_1957240234549049_2780761388790841344_n.jpg">
				</div>
				<div>
					<img src="img/22499704_136683347059846_3180264708200464384_n.jpg">
				</div>		-->
			</div>
			<div class="row slider-buttons">
				<div class="col-xs-6 col-md-1 offset-md-3 left-arrow">
					<i class="ion-chevron-left arrow"></i>
				</div>
				<div class="col-xs-6 col-md-1 offset-md-4 right-arrow">
					<i class="ion-chevron-right arrow"></i></div>
			</div>
			<div class="row contact-form-heading">
				<div class="col-md-6 offset-md-3">
					<h4>All of us are awesome. Keep in touch.</h4>
				</div>
			</div>
			<div class="row contact-form">
				<div class="col-md-6 offset-md-3">
					<?php the_field('contact_form_area'); ?>
				</div>
			</div>
	<?php endwhile; ?>

<?php get_footer(); ?>