<?php
/**
 * Full Content Home
 *
   Template Name:  Full Width Home Slider 2
 *
 */
?>
<?php get_header(); ?>

<?php if( have_rows('hero') ): ?>
<div class="full-width hero clearfix" role="hero-unit">

	<?php while( have_rows('hero') ): the_row(); 

		// vars
		$image = get_sub_field('hero_slide');
		?>
			<div class="sliders img-responsive" style="background: url(<?php echo $image; ?>) ;" >
			</div><!-- .sliders -->
		<?php endwhile; ?>
	<?php endif; ?>
</div> <!-- end #full-width -->


	<section class="container clearfix">
		<div class="row">
			<div class="col-md-6 column-1">
				<?php the_field('left_column');?>
	 		</div><!-- .col-md-6 -->

			<div class="col-md-6">
				<img src="<?php the_field('right_column');?>" class="img-responsive">
	 		</div><!-- .col-md-6 -->

		</div><!-- .row -->
	</section>
	<section>
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
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php get_footer(); ?>