<?php get_header(); ?>
		
		<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h4 class="posts-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">

									<?php the_content(); ?>

								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if (function_exists("builder_numbered_pages")) { ?>
									<?php builder_numbered_pages(); ?>

									<?php } else { ?>
										<nav>
											<ul class="pager">
												<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
												<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
											</ul>
										</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

								</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
