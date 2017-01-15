<!DOCTYPE html >
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<!-- crafted by Fed A. -->
		<!-- All the CSS and JS is properly hooked in the functions.php  -->
		<title>
			<?php  wp_title(); ?>
		</title>
	      	<?php wp_head(); ?>
		<!-- facebook buttons -->
		<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=1499796813682025";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>

	<body <?php body_class();?>>

	<?php get_header('top'); ?>

	<div class="container-fluid bg1"  style="background-image:url(<?php bloginfo('template_directory'); ?>/images/volna_bgr.png); background-position: bottom; background-repeat: repeat-x">
	    <div class="container header1">
	        <div class="row">
	            <div class="nobg col-md-4 col-sm-2 hidden-xs  text-center">
	                <div style="padding-top: 60px"><img src="<?php bloginfo('template_directory'); ?>/images/logo_boat1.png"></div>
	                <div style="padding-top: 20px"><img src="<?php bloginfo('template_directory'); ?>/images/wave_blue_md.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_blue_md.png"></div>
	            </div>
	            <div class="nobg col-md-4 col-sm-8 col-xs-12 text-center">
	              <img src="<?php bloginfo('template_directory'); ?>/images/log.png" width="300" alt="Парусная яхта Мамушка. Путешествие офисного планктона по мировому океану" />
	            </div>
	            <div class="nobg col-md-4 col-sm-2 hidden-xs" style="padding-top: 150px; padding-left: 30px;">
	                <div class="hidden-sm"><img src="<?php bloginfo('template_directory'); ?>/images/wave_white.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_white.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_white.png"></div>
	                <div style="padding-top: 20px"><img src="<?php bloginfo('template_directory'); ?>/images/dolphins.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_blue_md.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_blue_md.png"><img src="<?php bloginfo('template_directory'); ?>/images/wave_blue_md.png"></div>
	            </div>
	        </div>
	    </div>
	</div>

	<?php get_header('bottom'); ?>
