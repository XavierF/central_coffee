

			
			<!-- <div class="visible-xs">
				<a data-spy="affix" data-offset-bottom="500" class="affix-bottom btn btn-block" href="#top">back to the top</a>
			</div> -->
			<footer class="footer" role="site-info">
				<div class="container clearfix">
				
					<div class="source-org">
						<a class="ftr-address" href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco" target="_blank">1696 HAYES ST, SAN FRANCISCO, CA 94117</a>
						<a class="ftr-phone" href="tel:+4159222008">(415) 922 - 2008</a>
						<p>Open Daily 6:00 AM to 7:00 PM</p>
							<?php bones_footer_links(); ?>
				
					 <p class="copyright">&copy; <?php echo date('Y'); ?>	 Copyright <?php bloginfo( 'name' ); ?></p>
					</div>
					
				
				</div> <!-- end .container -->

			</footer> <!-- end footer -->
</div> <!-- end .wrapper -->
		<!-- all js scripts are loaded in library/bones.php -->
		
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
	<script type="text/javascript">
		jQuery(document).ready(function($){
     $('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
            $('.navbar-collapse').collapse('toggle');
          });
	
			$('.hero').slick({
				autoplay: false,
				infinite: true,
				fade: true,
  			dots: false,
  			speed: 3000,
  			swipe: true,
  			int: 5000
				});
			$('.slides').slick({
				autoplay: false,
				infinite: true,
				speed: 1500,
				swipe: true,
  			slidesToShow: 5,
  			slidesToScroll: 1,
  			dots: true,
  			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 568,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
				});
			});

		</script>
	</body>

</html> <!-- end page. what a ride! -->
