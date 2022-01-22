<?php get_header();?>
    <div class="single-page">
        <div class="container">
            <div class="main-single">
                <section class="category-post">
                    <div class="category-head">
                        <h4>جستجو شده برای : <span style="color: #5caf21;"><?php echo get_search_query(); ?></span></h4>
                    </div>
                    <?php if (have_posts()){
                        while (have_posts()) : the_post(); ?>
                            <div class="item box-article">
                                <?php the_post_thumbnail('article');?>
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a> </h2>
                                <p><?php the_excerpt();?></p>
                                <div class="btn-more"><a href="<?php the_permalink();?>">بیشتر بخوانید</a> </div>
                            </div>
                        <?php endwhile; }?>
                </section>
                <div class="pagination">
                    <?php echo paginate_links(array(
                        'prev_text'=>'قبلی',
                        'next_text'=>'بعدی',
                    ));?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
<?php get_footer();?>