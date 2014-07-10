			
<div class="push"></div>
			</div> <!-- end .wrapper -->

			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">
				
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
		<script>
		jQuery('li.trigger-contact a').attr('id', 'contact-us');
			
		</script>
	</body>

</html> <!-- end page. what a ride! -->
