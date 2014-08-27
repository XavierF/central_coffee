<div class="push"></div>
</div> <!-- end .wrapper -->
			
			<!-- <div class="visible-xs">
				<a data-spy="affix" data-offset-bottom="500" class="affix-bottom btn btn-block" href="#top">back to the top</a>
			</div> -->
			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">
				
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
	<script type="text/javascript">
		jQuery(document).ready(function($){

     $('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
            $('.navbar-collapse').collapse('toggle');
          });
			$('.slides').slick({
				autoplay: true,
				autoplaySpeed: 8000,
				fade: true,
				speed: 1000,
				dots: true,
				infinite: false,
				slidesToShow: 1,
  		slidesToScroll: 1,
  		swipe: true	
				});
			});

		</script>
	</body>

</html> <!-- end page. what a ride! -->
