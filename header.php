<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- crafted by Fed A. -->
	<!-- All the CSS and JS is properly hooked in the functions.php  -->
	<title>
		<?php wp_title(); ?>
	</title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class();?>>

    <div class="container-fluid bg1 bg-volna<?php echo  (is_front_page()) ? '-1' : '-2' ?>">
      <?php get_header('top') ?>
      <?php (is_front_page()) ? get_header('logo') :'' ?>
    </div>

    <?php get_header('bottom') ?>
