<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-title">
                <h2>TV</h2>
                <h5>تلویزیون</h5>
            </div>
            <div class="tv-link">
                <a href="<?php echo get_post_type_archive_link( 'tv' ); ?>">ویدئوهای بیشتر</a>
            </div>
        </div>
        <div class="box-tv">
            <div class="tv-right">
                <?php $f_tv=new WP_Query(array(
                    'post_type'=>'tv',
                    'posts_per_page'=>1
                ));
                if ($f_tv->have_posts()){
                    while ($f_tv->have_posts()): $f_tv->the_post();?>
                        <div class="first-post">
                            <a href="<?php the_permalink();?>">
                                <figure>
                                    <?php if (has_post_thumbnail()){
                                        the_post_thumbnail('tv_large');
                                    }else{
                                         ?>
                                        <img src="<?php echo get_template_directory_uri().'/img/cc.png';?>"><?php
                                    }
                                    ?>
                                    <i class="fas fa-play-circle"></i>

                                    <?php
                                    $time=get_post_meta(get_the_ID(),'pishro_video_time',true);
                                    if (!empty($time)){
                                        ?>
                                    <span><?php echo $time;?><i class="fas fa-play"></i></span>
                                    <?php
                                    }
                                    ?>
                                </figure>
                            </a>
                        </div>
                <?php endwhile; } wp_reset_postdata(); ?>
            </div>
            <div class="tv-left">
                <?php $f_tv=new WP_Query(array(
                    'post_type'=>'tv',
                    'posts_per_page'=>4,
                    'offset'=>1
                ));
                if ($f_tv->have_posts())
                {
                    while ($f_tv->have_posts()): $f_tv->the_post(); ?>
                         <div class="other-post">
                            <a href="<?php the_permalink();?>">
                                <figure>
                                    <?php if (has_post_thumbnail()){
                                        the_post_thumbnail('tv_small');
                                    }else{
                                        ?>
                                        <img src="<?php echo get_template_directory_uri().'/img/cc.png';?>"><?php
                                    }
                                    ?>
                                    <i class="fas fa-play"></i>
                                    <?php
                                    $time=get_post_meta(get_the_ID(),'pishro_video_time',true);
                                    if (!empty($time)){
                                        ?>
                                        <span class="time"><?php echo $time;?></span>
                                        <?php
                                    }
                                    ?>
                                    <h2><?php the_title()?></h2>
                                </figure>
                            </a>
                        </div>
                 <?php endwhile; } wp_reset_postdata();?>
                <div class="more-tv">
                    <a href="#">ویدئوهای بیشتر</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="line"></div>
