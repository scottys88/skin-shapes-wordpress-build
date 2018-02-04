<?php /* Template Name: Contact-Page */ ?>
<?php get_header(); ?>	
<!-- Hero image and copy -->

<?php while(have_posts()) : the_post(); ?>
<div class="container-fluid about-bg">
			<div class="row sub-hero-area">
				<div class="col-xs-12 sub-hero-heading col-md-12"><h1><?php the_title() ?></h1></div>
			</div>
<div class="row contact-form">
				<div class="col-md-6 offset-md-3">
					<p class="contact-para"><?php the_content(); ?></p>
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
				<h2>Find us on social.</h2>
				</div>
			</div>
			<div class="row slider-container" id="slider-container">
				<!--<div>.hom
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

<?php endwhile; ?>
<?php get_footer(); ?>