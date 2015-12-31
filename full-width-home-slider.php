<?php
/**
 * Full Content Home
 *
   Template Name:  Full Width Home Slider
 *
 */
?>
<?php get_header(); ?>

<div class="logo-container-home">
	<a class="navbar-brand-home col-md-6 clearfix" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"></a>
</div><!--.logo-container -->
<?php if( have_rows('hero') ): ?>
<div class="container-fluid hero clearfix" role="hero-unit">
	<?php while( have_rows('hero') ): the_row(); 
		// vars
		$image = get_sub_field('hero_slide');
		?>
			<div class="sliders img-responsive">
		    	<img src="<?php echo $image; ?>" class="img-responsive">
			</div><!-- .sliders -->
		<?php endwhile; ?>
</div> <!-- end #full-width -->
<?php endif; ?>
	<section class="container clearfix" id="main-content">
		<div class="row">
			<div class="col-md-12 main-column">
				<h1 class="site-tagline"><?php bloginfo('description'); ?></h1>
				<?php the_field('left_column');?>
	 		</div><!-- .col-md-6 -->

			<div class="map col-md-6">
				<img src="<?php the_field('right_column');?>" class="img-responsive">
	 		</div><!-- .col-md-6 -->
	 		<div class="info col-md-6">
	 			<h2 class="sub-head"><a href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco" target="_blank">1696 Hayes Street (@Central Ave), San Francisco, CA 94117</a></h2>
	 			<h2 class="sub-head">Open Daily 6:00 AM to 7:00 PM</h2>
	 			<h2 class="sub-head"><a href="tel:+4159222008">(415) 922-2008</a></h2>
	 		</div>

		</div><!-- .row -->
	</section>
	<section class="film-strip">
		<?php if( have_rows('slides') ): ?>
		<div class="slides">
			<?php while( have_rows('slides') ): the_row(); 

		// vars
		$img = get_sub_field('slide');
		?>

			<div class="item">
				<img src="<?php echo $img; ?>" class="img-responsive">
		  </div><!-- end .item -->

		<?php endwhile; ?>
		<?php endif; ?>

		</div><!-- end .slides--> 
	</section>

<?php get_footer(); ?>