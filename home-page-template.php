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
	<div class="container-fluid">
		<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
	</div>
</section> <!-- end hero-unit -->


	<div class="container">


<div id="content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									


								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
							</section> <!-- end article section -->


							

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

						</div> <!-- end #main -->

				</div> <!-- end #content -->


		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">

		<div class="row content">
			
			<div class="col-md-3">

				<?php the_field('left'); ?>
      </div><!-- end .col-md-4 -->
      <div class="col-md-3">

				<?php the_field('middle'); ?>
      </div><!-- end .col-md-4 -->
      <div class="col-md-3">

				<?php the_field('right'); ?>
      </div><!-- end .col-md-4 -->

		</div><!-- .row -->
	</div><!-- .container -->
</section>
<?php get_footer(); ?>