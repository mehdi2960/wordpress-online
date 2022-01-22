<footer>
    <div class="container">
        <div class="aboute">
            <h3><?php echo get_field('footer_title_right','option');?></h3>
            <p>
                <?php echo get_field('footer_text_right','option');?>
            </p>
        </div>

        <div class="f-menu">
            <h3>دسترسی سریع</h3>
            <?php wp_nav_menu(array('theme_location'=>'footer_menu'));?>
        </div>

        <div class="f-menu">
            <h3>ارتباط ما</h3>
            <ul>
                <li><i class="fas fa-mobile"></i> تلفن :  <?php echo get_field('footer_tell','option');?> </li>
                <li> <i class="fas fa-inbox"></i> ایمیل :  <?php echo get_field('footer_email','option');?> </li>
<!--                <p>آدرس :  تهران</p>-->
            </ul>
        </div>
    </div>

    <div class="copy-right">
        <div class="container">
            <p> تمامی حقوق و مطالب سایت برای وب سایت ما محفوظ می باشد و کپی برداری از مطالب رایگان باذکر منبع آزاد است. </p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i> </a>
                <a href="#"><i class="fab fa-twitter"></i> </a>
                <a href="#"><i class="fab fa-telegram"></i> </a>
                <a href="#"><i class="fab fa-linkedin"></i> </a>
                <a href="#"><i class="fab fa-youtube"></i> </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>