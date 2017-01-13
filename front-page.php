<?php
if (is_front_page()) :
 get_header('front');
 endif;
?>

<div class="container-fluid bg1">
    <div class="container header1">
        <div class="row">
            <div class="nobg col-lg-2 col-md-3 col-sm-3 col-xs-6 right text-right"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/svmamushka_logo1.png" alt="Путешествие на яхте Мамушка" /></a></div>
            <div class="nobg col-lg-10 col-md-9 col-sm-9 col-xs-6"><?php echo do_shortcode ('[shortmenu menu="Menu 1"  enhance="true"  display="inline" menu_anchor_color="#ffffff"  menu_anchor_hover_color="#ffffff"  submenu_anchor_color="#e0e0e0"  submenu_anchor_hover_color="#ffffff"  submenu_transparency="0.8"  arrow="false"  is_responsive="true" responsive="750"]')?></div>
        </div>
    </div>
</div>

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

<div class="container-fluid bg2">
    <div class="container">
        <div class="row header2">
            <div class="nobg col-md-4 col-sm-4"><h4><img src="<?php bloginfo('template_directory'); ?>/images/calend.png">
            <?=get_option('trip_days'); ?> дней с момента старта</h4></div>
            <div class="nobg col-md-4 col-sm-4"><h4 class="text-center"><a href="<?php bloginfo('url'); ?>/mamushka-position/" title="Где сейчас Мамушка?"  class="amenu"><img src="<?php bloginfo('template_directory'); ?>/images/map1.png"> Пройдено:<?=get_option('fd_gpx_route1');?> морских миль</a></h4></div>
            <div class="nobg col-md-4 col-sm-4"><h4 class="text-right"><a href="<?php bloginfo('url'); ?>/category/budget/" title="Расходы экипажа Мамушки"  class="amenu"><img src="<?php bloginfo('template_directory'); ?>/images/money.png"> Потрачено: $<?=get_option('expense_total');?></a></h4></div>
            </div>
    </div>
</div>

<div class="container-fluid">
   <div class="row">
   <div class="col-md-12 col-sm-12 wide-header">
   <?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('wide-header') ) { } ?>
   <?php  echo do_shortcode('[mapsmarker layer="1"]'); ?>
   </div>
   </div>
</div>

<div class="row bg1 text-center">
   <div class="col-md-12 col-sm-12 text-center storyline">
     <h1>Путешествие на яхте "Мамушка"</h1>
     <img src="<?php bloginfo('template_directory'); ?>/images/wheel.png">
     <p>"Мамушка" - парусная яхта, Hunter 340, на которой в начале лета 2015 года мы, московский офисный планктон, отправились в путешествие по мировому океану. Почему?
     Потому что жизнь одна, а провести ее всю в офисе, пусть даже занимаясь любимым делом, не хочется.
     Пришло время сделать паузу и посмотреть - что там за горизонтом?
    </p>
  </div>
</div>

<div class="container-fluid news">
  <div class="container news">
    <h2 class = "text-center">Новые путевые заметки</h2>
    <div class="row" style="margin-bottom: 3em;">
      <?php $newposts_count = 3;
      $args = array('showposts' => $newposts_count,'cat' => -4);
          $my_query = new WP_Query($args);
              while ($my_query->have_posts()) : $my_query->the_post();
              $do_not_duplicate = $post->ID; ?>
            <div class="col-md-4 col-sm-6 col-xs-12 news">
              <div class="bg3 news-col">
                <?php if ( has_post_thumbnail() ) {
                           the_post_thumbnail('thumbnail');
                              } ?>
                <h3 class = "news-title">
                  <a href="<?php the_permalink(); ?>"><?php the_date('d.m.Y'); ?>.
                     <?php the_title(); ?></a><br/>
                </h3>
                <div class="text-left">
                <?php global $more;
            		$more = 0;
                  the_content(); ?>
                </div>
             </div>
           </div>
            <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row bg-bottom" >
    <h2 class = "text-center">Фотографии нашего приключения</h2>
    <div class="container">
      <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home_bottom_1' ); ?>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>
