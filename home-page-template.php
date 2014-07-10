<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="hero-unit">


	 
</section> <!-- end hero-unit -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">

		<div class="row content">
			
			<div class="col-md-4">
				
      </div><!-- end .col-md-4 -->

		</div><!-- .row -->
	</div><!-- .container -->
</section>
<?php get_footer(); ?>