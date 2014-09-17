<?php
/**
 * Full Content Home
 *
   Template Name:  Full Width Home
 *
 */
?>
<?php get_header(); ?>

	<div class="full-width hero clearfix" role="hero-unit">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'main .col-md-6 .col-md-offset-3 clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</header> <!-- end article header -->

					<section class="entry-content clearfix" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <!-- end article section -->

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
		</div><!-- .container -->
	</div> <!-- end #full-width -->
	<section class="container ">
		<div class="row">
			<div class="col-md-6">
				<?php the_field('left_column');?>
	 		</div><!-- .col-md-6 -->

			<div class="col-md-6">
				<?php the_field('right_column');?>
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