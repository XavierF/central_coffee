<?php
/**
 * Full Content Home
 *
   Template Name:  Full Width Home Slider
 *
 */
?>
<?php get_header(); ?>

<?php if( have_rows('hero') ): ?>
<div class="full-width hero clearfix" role="hero-unit">

	<?php while( have_rows('hero') ): the_row(); 

		// vars
		$image = get_sub_field('hero_slide');
		$content = get_sub_field('caption');

		?>
	
			<div class="sliders" style="background: url(<?php echo $image; ?>) ;" >

			    <div class="panels col-md-4"><?php echo $content; ?></div>

			</div><!-- .sliders -->

		<?php endwhile; ?>


	<?php endif; ?>
</div> <!-- end #full-width -->


	<section class="container ">
		<div class="row">
			<div class="col-md-6">
				<?php the_field('left_column');?>
	 		</div><!-- .col-md-6 -->

			<div class="col-md-6">
				<img src="<?php the_field('right_column');?>" class="img-responsive">
	 		</div><!-- .col-md-6 -->

		</div><!-- .row -->
	</section>

	<div class="slides">

		<div class="item">
			<img src="<?php the_field('slide_1');?>" class="img-responsive">
	  </div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_2');?>" class="img-responsive">
		</div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_3');?>" class="img-responsive">
	  </div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_4');?>" class="img-responsive">
		</div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_5');?>" class="img-responsive">
		</div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_6');?>" class="img-responsive">
		</div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_7');?>" class="img-responsive">
		</div><!-- end .item -->

		<div class="item">
			<img src="<?php the_field('slide_8');?>" class="img-responsive">
		</div><!-- end .item -->

	</div><!-- end .slides--> 

<?php get_footer(); ?>