<?php get_header(); ?>
    <div class="single-page">
        <div class="container">
            <div class="main-single full-width">
                <?php if (have_posts()) {
                    while (have_posts()) : the_post(); ?>
                        <article class="post-single">
                            <header>
                                <h1><?php the_title(); ?></h1>
                                <div class="post-meta">
                                    <i class="fas fa-clock"></i>
                                    <span><?php the_time('j F Y'); ?></span>
                                </div>
                                <div class="post-meta">
                                    <i class="fas fa-user"></i>
                                    <span><?php the_author(); ?></span>
                                </div>
                                <div class="post-meta">
                                    <i class="fas fa-folder-open"></i>
                                    <span><a href="#" target="_blank"><?php the_category(' , '); ?></a></span>
                                </div>
                                <div class="post-meta">
                                    <i class="fas fa-eye"></i>
                                    <span><?php if (function_exists('the_views')) {
                                            the_views();
                                        } ?></span>
                                </div>
                            </header>

                            <div class="post-thumbnail">
                                <figure>
                                    <?php the_post_thumbnail('large'); ?>
                                </figure>
                            </div>

                            <div class="content-single">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>


                        </article>
                    <?php endwhile;
                } ?>
                <?php
                if (comments_open() || get_comments_number()) :?>
                    <div class="comments">
                        <div class="related-head">
                            <h4>نظرات :</h4>
                        </div>
                        <?php
                        comments_template();
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>