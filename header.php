<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(); ?></title>
	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<!-- or, set /favicon.ico for IE10 win -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
			<!-- FONTS -->

			<!-- wordpress head functions -->
			<?php wp_head(); ?>
			<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Oswald:400,700,300' rel='stylesheet' type='text/css'>
			<!-- end of wordpress head -->
			<!-- drop Google Analytics Here -->

			<!-- end analytics -->
</head>
		<body <?php body_class(); ?>>
			<div class="wrapper">
				<header class="header" role="banner" id="top">
					<nav role="navigation">
						<div class="navbar navbar-default clearfix">
							<div class="container">
								<a class="address hidden-xs" href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco" target="_blank"><h3>1696 Hayes Street</h3><h3>(@Central Ave),</h3><h3>San Francisco, CA 94117</h3></a>
								<a class="navbar-brand clearfix" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"></a>
								<div class="phone hidden-xs"><h3>Open Daily</h3><h3>6:00 AM to 7:00 PM</h3><a href="tel:+4159222008"><h3>(415) 922 - 2008</h3></a></div>
								<a class="mobile-address visible-xs" href="https://local.yahoo.com/info-21357723-central-coffee-tea-spice-san-francisco" target="_blank"><h4>1696 Hayes Street (@Central Ave),</h4><h4> San Francisco, CA 94117</h4></a>
								<a class="mobile-phone visible-xs" href="tel:+4159222008"><h4>(415) 922 - 2008</h4></a>
								<!--<a href="https://www.google.com/maps/place/1696+Hayes+St,+San+Francisco,+CA+94117/@37.7751568,-122.4443275,18z/data=!4m2!3m1!1s0x808580b28170d723:0xc411367e70f31ed0" target="_blank"><h3>1696 Hayes Street, San Francisco, CA 94117</h3></a> <a href="tel:+4159222008" class="phone"><h3>(415) 922 - 2008</h3></a> -->
									<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
							</div><!-- end .container -->
							<div class="container-fluid-nav">
								<div class="container">
									<div class="navbar-collapse collapse navbar-responsive-collapse">
										<?php bones_main_nav(); ?>
									</div><!-- end .navbar-collapse -->
								</div><!-- end .container -->
							</div><!-- end .container-fluid-nav -->
							
						</div> <!-- end .navbar navbar-default navbar-fixed-top -->
					</nav>
				</header> <!-- end header -->
