<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
		<div class="row intro">
				<div class="col-md-5 offset-md-1 intro-para">
					<h2 class="intro-heading">All are Welcome</h2>
					<p class="intro-text">
						<?php the_content(); ?>
					</p>
				</div>
				<div class="col-md-4 offset-md-1 intro-image-container">
					<img class="intro-image" src="img/rainbow-heart.png">
				</div>
			</div>
			<div class="row product-intro-text">
				<div class="col-md-5 offset-md-1">
					<h4>All our Fabric is for fun</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis interdum nisi. Fusce eu ornare magna. </p>
				</div>
			</div>
			<div class="row product-row">
				<div class="col-md-12 img-container-1">
				</div>
			</div>
			<div class="row product-row">
				<div class="col-md-6 img-container-2">
				</div>
				<div class="col-md-6 img-container-3">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 offset-md-5 view-more-btn">
					<a class="btn btn-primary primary-btn-override" href="#" style="margin-bottom:4px;white-space: normal;">Shop now</a>
				</div>
			</div>
			<div class="row slider-heading-container">
				<div class="col-md-5 offset-md-1 slider-heading">
					<h3>All the exciting things</h3>
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
					<form class="home-contact">
						<div class="form-group">
							<label for="input-first-name">First Name</label>
							<input type="text" id="input-first-name" class="form-control">
						</div>
						<div class="form-group">
							<label for="input-last-name">Last Name</label>
							<input type="text" id="input-last-name" class="form-control">
						</div>
						<div class="form-group">
							<label for="input-email">Email</label>
							<input type="email" id="input-email" class="form-control">
						</div>
						<div class="form-group">
							<label for="input-feedback-box">Your feedback</label>
							<textarea class="form-control" id="input-feedback-box" rows="5"></textarea>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input big-checkbox" type="checkbox" value="">
								&nbsp; &nbsp; Sign up for the Skin Shapes newsletter
							</label>
						</div>
						<button type="submit" class="btn btn-primary primary-btn-override form-submit">Let us know!</button>
					</form>
				</div>
			</div>
	<?php endwhile; ?>

<?php get_footer(); ?>