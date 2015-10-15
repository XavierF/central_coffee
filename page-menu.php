<?php
/**
 * Page-Menu
 *
   Template Name:  Menu
 *
 */
?>

<?php get_header(); ?>

<div class="container">

			<div id="content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

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
					<section class="menu">

						<div class="row">
						<?php if( have_rows('menu') ): ?>
					<div class="menu-container">
					<?php 
					// loop through rows (parent repeater)
					while( have_rows('menu') ): the_row(); 
							//vars
								$header = get_sub_field('menu_header'); 
								$text = get_sub_field('text');
								$cat_img = get_sub_field('category_image')
								?>
						<div class="col-md-6">
							
							<?php 
							// check for rows (sub repeater)
							if( have_rows('menu_item') ): ?>
								
									<div class="cat-header">
										<h2 class"menu-header"><?php echo $header; ?></h2>
										<p><?php echo $text; ?></p>
										<img src="<?php echo $cat_img; ?>"  alt="<?php echo $title; ?>"  class="img-responsive">

									</div><!-- .header -->

								<?php 
								// loop through rows (sub repeater)
								while( have_rows('menu_item') ): the_row(); 
								// vars
											$title = get_sub_field ('title');
											$text = get_sub_field('text');
											$image = get_sub_field('image');

									// display each item
									?>
									<div class="panel"> 
										<img src="<?php echo $image; ?>"  alt="<?php echo $title; ?>"  class="img-responsive">
										<h2 class="sub-head"><?php echo $title; ?></h2>
										<p><?php echo $text; ?></p>
									</div><!-- .panel -->
								<?php endwhile; ?>
								</div><!-- .col-md-6-->
							<?php endif; //if( get_sub_field('menu_item') ): ?>
						

					<?php endwhile; // while( have-rows('menu') ): ?>
					</div><!-- .menu-container -->
				
				<?php endif; // if( have_rows('menu') ): ?>

					</div><!-- .row-->
					
				</section>
				</div> <!-- end #main -->
						


			</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
