<div class="push"></div>
</div> <!-- end .wrapper -->
			
			<!-- <div class="visible-xs">
				<a data-spy="affix" data-offset-bottom="500" class="affix-bottom btn btn-block" href="#top">back to the top</a>
			</div> -->
			<footer class="footer" role="contentinfo">


				<div id="inner-footer" class="wrap clearfix">
				
					<div class="source-org">
						<a class="ftr-address" href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco" target="_blank">1696 Hayes Street(@Central Ave), San Francisco,CA 94117</a>
						<a class="ftr-phone" href="tel:+4159222008">(415) 922 - 2008</a>
						<a class="map" href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco">MAP</a>
					</div>
							<?php bones_footer_links(); ?>
					<div class="source-org">&copy; <?php echo date('Y'); ?> All content is copyright of <?php bloginfo( 'name' ); ?></div>
					
				
				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->
		<!-- all js scripts are loaded in library/bones.php -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
	<script type="text/javascript">
		jQuery(document).ready(function($){

     $('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
            $('.navbar-collapse').collapse('toggle');
          });
			$('.full-width').slick({
				autoplay: false,
  			dots: true,
  			int: 4000
				});
			$('.slides').slick({
				autoplay: false,
				infinite: true,
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
