<div class="archive-box item box-course">
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail('product');
    } else {
        ?>
           <img src="<?php echo get_template_directory_uri() . '/img/cc.png' ?>" alt="">
        <?php
    }
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
