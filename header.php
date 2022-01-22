<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head();?>
</head>
<body>

<div class="top-menu">
    <div class="container">
        <div class="topbar-right">
            <ul>
                <li><i class="fas fa-phone"></i>  مشاوره و پشتیبانی واتساپ : <?php echo get_field('text_phone','option');?> </li>
                <li><i class="fa fa-envelope"></i>  ایمیل : <?php echo get_field('text_email','option');?> </li>
            </ul>
        </div>

        <div class="topbar-left">
            <ul>
                <li id="qty">
                    <i class="fas fa-shopping-bag"></i>
                    <div class="qty">
                       <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </div>
                </li>
                <li class="search-icon" style="cursor: pointer;"><i class="fas fa-search"></i></li>
            </ul>
        </div>

    </div>
</div>


<header class="header">
    <div class="container relative">
        <a href="<?php bloginfo('url');?>" class="logo">
            <img src="<?php echo get_field('imgheader', 'option')['sizes']['large'];?>">
        </a>

        <nav class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header_menu','container'=>'' ) ); ?>
        </nav>

        <div class="sign">
            <?php if (!is_user_logged_in()){?>
            <a href="<?php bloginfo('url'); ?>/my-account/" target="_blank"">
                <i class="fas fa-user-lock"></i>
                ورود / ثبت نام
            </a>
            <?php }else{
                ?>
                <a style="cursor: pointer;">
                    خوش آمدید :
                   <?php
                   global $current_user;
                   echo $current_user->user_nicename;?>
                </a>
            <?php
            }?>
        </div>
       <div class="searchbox">
           <form action="<?php home_url('/');?>" method="get">
               <input type="text" name="s" value="<?php the_search_query();?>" placeholder="جستجو کنید...">
               <button class="fas fa-search"></button>
           </form>
       </div>
    </div>
</header>
