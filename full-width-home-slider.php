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
	<div class="navbar-brand-home col-md-6 clearfix" title="<?php bloginfo( 'name' ) ?>" rel="homepage"></div>
</div><!--.logo-container -->
<?php if( have_rows('hero') ): ?>
<div class="container-fluid hero clearfix" role="hero-unit">
	<?php while( have_rows('hero') ): the_row(); 
		// vars
		$image = get_sub_field('hero_slide');
		?>
		<!--	<div class="sliders img-responsive">
		    	<img src="<?php echo $image; ?>" class="img-responsive">
			</div><!-- .sliders -->
		<?php endwhile; ?>
</div> <!-- end #full-width -->

<?php endif; ?>
	<section class="container clearfix" id="main-content">
		<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'main-column col-md-12 clearfix' ); ?> role="main" itemscope itemtype="http://schema.org/BlogPosting">
			<section>
				<h1 class="site-tagline"><?php bloginfo('description'); ?></h1>
				<hr class="dotted">
				<?php the_content(); ?>
	 		</section>
	 		<footer class="article-footer">
						<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?>
					</footer> <!-- end article footer -->

				</article> <!-- end article -->

		<?php endwhile; else : ?>

				<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

			<?php endif; ?>


		</div><!-- .row -->
	</section>
	<section class="film-strip clearfix">
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