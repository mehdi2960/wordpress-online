<?php get_header(); ?>

<?php
if (have_rows('block','option')):
include_once 'inc/tmp/slider.php';
endif;
?>

<?php include_once 'inc/tmp/tv.php'; ?>

<?php include_once 'inc/tmp/blog.php'; ?>

<?php include_once 'inc/tmp/adv.php'; ?>

<?php include_once 'inc/tmp/course.php'; ?>

<?php get_footer(); ?>