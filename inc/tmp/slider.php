<section class="box-slider">
    <div id="main_slider" class="owl-carousel owl-theme">
        <?php while (have_rows('block','option')) : the_row();?>
        <div class="item">
            <img src="<?php echo get_sub_field('image')['sizes']['large'];?>">
        </div>
        <?php endwhile;?>
    </div>
</section>

<div class="line"></div>