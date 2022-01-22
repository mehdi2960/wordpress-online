<section class="article">
    <div class="container">
        <div class="article-head">
            <div class="article-title">
                <h2>مقالات</h2>
                <h5>بلاگ</h5>
            </div>
            <div class="article-link">
                <a href="<?php the_permalink(); ?>">مقالات بیشتر</a>
            </div>
        </div>
        <div class="article-slider">
            <div id="multi_slider" class="owl-carousel owl-theme">
                <?php
                if (have_posts()) {
                    while (have_posts()) : the_post(); ?>
                        <div class="item box-article">
                            <?php the_post_thumbnail('article'); ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn-more">
                                <a href="<?php the_permalink(); ?>">بیشتر بخوانید</a>
                            </div>
                        </div>
                    <?php endwhile; } ?>
            </div>
        </div>
    </div>
</section>
<div class="line"></div>