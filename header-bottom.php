<!-- Header bottom - progress items -->
<div class="container-fluid bg2">
    <div class="container">
        <div class="row header2">
            <div class="nobg col-md-4 col-sm-4 col-xs-12 px-0 head2">
                <span class="header2-item item1">           <?=get_option('trip_days'); ?> дней с момента старта</span>
            </div>
            <div class="nobg col-md-4 col-sm-4 col-xs-12 text-center px-0 head2">
                <span class="header2-item item2"><a href="<?php bloginfo('url'); ?>/mamushka-position/" title="Где сейчас Мамушка?"  class="amenu">Пройдено: <?=get_option('fd_gpx_route1');?> морских миль</a></span>
            </div>
            <div class="nobg col-md-4 col-sm-4 col-xs-12 text-right px-0 head2">
                <span class="header2-item item3"><a href="<?php bloginfo('url'); ?>/category/budget/" title="Расходы экипажа Мамушки"  class="amenu">Потрачено: $<?=get_option('expense_total');?></a></span>
            </div>
        </div>
    </div>
</div>
