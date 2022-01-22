<section class="course">
    <div class="container">
        <div class="course-head">
            <div class="course-title">
                <h2>دوره های پرطرفدار</h2>
                <h5>آموزش</h5>
            </div>
            <div class="course-link">
                <a href="<?php echo get_post_type_archive_link('product') ?>">همه دوره</a>
            </div>
        </div>
        <div class="course-slider">
            <div id="course_slider" class="owl-carousel owl-theme">
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => 6,
                )); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="item box-course">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('product');
                            } else {
                                ?>
                                <img src="<?php echo get_template_directory_uri() . '/img/cc.png' ?>" alt="">
                                <?php
                            }
                            ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="desc">
                                <div class="teacher">
                            <span>
                                <?php
                                $name = get_post_meta(get_the_ID(), 'pishro_teacher_product_name', true);
                                if (!empty($name)) {
                                    echo $name;
                                }
                                ?>
                            </span>
                                    <i class="fas fa-chalkboard-teacher" style="vertical-align: middle !important;"></i>
                                </div>
                                <div class="woocommerce rate">
                                    <?php woocommerce_template_loop_rating(); ?>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="price">
                                    <?php
                                    global $product;
                                    echo $product->get_price_html();
                                    ?>
                                </div>
                                <div class="users">
                                    <i class="fas fa-users"></i>
                                    <?php
                                    $id = $product->id;
                                    echo get_post_meta($id, 'total_sales', true);
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;?>
                    <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<div class="line"></div>
