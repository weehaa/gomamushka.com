<?php  get_header(); ?>

<!-- Map -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 wide-header">
          <?php  echo do_shortcode('[mapsmarker layer="1"]'); ?>

        </div>
     </div>
   </div>
</div>
<!--bug in shortcode script - unclosed div??? --></div>

<!-- h1, Storyline -->
<div class="container-fluid">
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


  <div class="row">
    <div class="container px-0">
      <div class = "row">
        <div class = "col-md-12">
          <h2 class = "text-center">Новые путевые заметки</h2>
        </div>
      </div>

      <div class="row" style="margin-bottom: 3em;">
        <?php $newposts_count = 3;
        $args = array('showposts' => $newposts_count,'cat' => -4);
            $my_query = new WP_Query($args);
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
              <div class="col-md-4 col-sm-6 col-xs-12 px-0">
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

<!-- Photos & FB link -->
<div class="container-fluid bg-bottom">
    <div class="row " >
      <div class = "col-md-12">
        <h2 class = "text-center">Фотографии нашего приключения</h2>
      </div>
      <div class="container">
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
          <?php dynamic_sidebar( 'home_bottom_1' ); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
          <div class="fb-like" data-href="https://www.facebook.com/s.v.mamushka/" data-width="320" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
      </div>
    </div>
</div>

<?php
get_footer();
?>
