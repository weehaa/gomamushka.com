<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
            
<div class="container-fluid bg1"  style="background-image:url(<?php bloginfo('template_directory'); ?>/images/volna_bgr_2.png); background-position: bottom; background-repeat: repeat-x; height: 130px">
    <div class="container header1">
        <div class="row">
            <div class="nobg col-lg-2 col-md-3 col-sm-3 col-xs-6 right text-right"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/svmamushka_logo1.png" alt="Путешествие на яхте Мамушка" /></a> </div>
            <div class="nobg col-lg-10 col-md-9 col-sm-9 col-xs-6"><?php echo do_shortcode ('[shortmenu menu="Menu 1"  enhance="true"  display="inline" menu_anchor_color="#ffffff"  menu_anchor_hover_color="#ffffff"  submenu_anchor_color="#e0e0e0"  submenu_anchor_hover_color="#ffffff"  submenu_transparency="0.8"  arrow="false"  is_responsive="true" responsive="750"]')?></div>
        </div>        
    </div>
</div>
<div class="container-fluid bg2">
    <div class="container">
        <div class="row header2">
            <div class="nobg col-md-4 col-sm-4"><h4><img src="<?php bloginfo('template_directory'); ?>/images/calend.png">
                        <?php
     $now = time(); // or your date as well
     $your_date = strtotime("2015-06-16");
     $datediff = $now - $your_date;
     echo floor($datediff/(60*60*24)); ?> дней с момента старта</h4></div>
            <div class="nobg col-md-4 col-sm-4"><h4 class="text-center"><a href="<?php bloginfo('url'); ?>/mamushka-position/" title="Где сейчас Мамушка?"  class="amenu"><img src="<?php bloginfo('template_directory'); ?>/images/map1.png"> Пройдено:<?=get_option('fd_gpx_route1');?> морских миль</h4></a></div>
            <div class="nobg col-md-4 col-sm-4"><h4 class="text-right"><a href="<?php bloginfo('url'); ?>/category/budget/" title="Расходы экипажа Мамушки"  class="amenu"><img src="<?php bloginfo('template_directory'); ?>/images/money.png"> Потрачено: $<?=get_option('expense_total');?></a></h4></div>
            </div>
    </div>
</div>