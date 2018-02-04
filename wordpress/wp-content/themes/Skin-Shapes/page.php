<?php get_header(); ?>	
<!-- Hero image and copy -->

<?php while(have_posts()) : the_post(); ?>
<div class="container-fluid about-bg">
			<div class="row sub-hero-area">
				<div class="col-xs-12 sub-hero-heading col-md-12"><h1><?php the_title() ?></h1></div>
			</div>
			<div class="row content-page">
				<div class="col-md-8 offset-md-2">
					<p><?php the_content(); ?></p>
				</div>		
			</div>

<?php endwhile; ?>
<?php get_footer(); ?>