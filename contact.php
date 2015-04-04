<?php
/*
Template Name: Contact
*/
get_header(); ?>

	<div class="row">


<!-- Row for main content area -->
	
	<div class="row">
		<div class="medium-6 large-6 columns">
			<p>Please fill out the form below - I will be in touch with you promptly.</p>
			<?php echo do_shortcode( '[contact-form-7 id="31" title="Contact Page"]' ); ?>
		</div>
		<div class="medium-6 large-6 columns">
			<p>E: <a href="mailto:jewellerybymoriah@gmail.com">jewellerybymoriah@gmail.com</a></p>
			<p>T: <a href="tel:4162040158">(416) 204 - 0158</a></p>
		</div>
		</div>

		
<?php get_footer(); ?>
