<section class="adv">
    <div class="container">
        <?php
        $Title=get_field('title','option');
        $Description=get_field('description','option');
        $Image=get_field('image','option');
        ?>
        <div class="right-adv">
            <h2><?php echo $Title;?></h2>
            <p>
                <?php echo $Description;?>
            </p>
            <a href="<?php echo $Image['sizes']['thumbnail'];?>"><?php echo $Title;?></a>
        </div>

        <div class="left-adv">
            <figure>
                <img src="<?php echo get_template_directory_uri() . '/img/wd.png'; ?>">
            </figure>
        </div>
    </div>
</section>
<div class="line"></div>