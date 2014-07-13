<?php
/*
Template Name: Services Page 
*/
?>

<?php get_header(); ?>

<div class="container">

	<div id="content">

		<div id="inner-content" class="wrap clearfix">


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> <!-- end article header -->

					<section class="entry-content clearfix" itemprop="articleBody">		
						<?php the_content(); ?>
					</section> <!-- end article section -->

					<section class="services">
						<div class="row">
							<div class="col-md-12"><h2><?php the_field('livingroom_hdr'); ?></h2></div>
							<div class="visual col-md-6" style="background: url('<?php the_field('livingroom_img'); ?>') center center no-repeat; background-size: cover;"></div>
							<div class="col-md-6"><?php the_field('livingroom_txt'); ?></div>
					  </div><!-- end .row -->

						<div class="row">
							<div class="col-md-12"><h2><?php the_field('kitchen_hdr'); ?></h2></div>
							<div class="visual col-md-6" style="background: url('<?php the_field('kitchen_img'); ?>') center center no-repeat; background-size: cover;"></div>
							<div class="col-md-6"><?php the_field('kitchen_txt'); ?></div>
						</div><!-- end .row -->

						<div class="row">
							<div class="col-md-12"><h2><?php the_field('bedroom_hdr'); ?></h2></div>
							<div class="visual col-md-6" style="background: url('<?php the_field('bedroom_img'); ?>') center center no-repeat; background-size: cover;"></div>
							<div class="col-md-6"><?php the_field('bedroom_txt'); ?></div>
					  </div><!-- end .row -->

						<div class="row">
							<div class="col-md-12"><h2><?php the_field('bathroom_hdr'); ?></h2></div>
							<div class="visual col-md-6" style="background: url('<?php the_field('bathroom_img'); ?>') center center no-repeat; background-size: cover;"></div>
							<div class="col-md-6"><?php the_field('bathroom_txt'); ?></div>
					  </div><!-- end .row -->

					  <div class="row">
					  	<div class="col-md-12">
					  	<h2><?php the_field('extras_hdr'); ?></h2>
					  	<p><?php the_field('extras'); ?></p>
					  	</div><!-- .col-md-12 -->
					  </div><!-- end .row -->
								
					</section><!-- .services -->

						<footer class="article-footer">
							<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?></p>
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
							<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

							<?php endif; ?>


		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
</div> <!-- end .container -->

<?php get_footer(); ?>
