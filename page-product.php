<?PHP /* 
Template Name: 商品紹介
Template Post Type: post, page, evwnt
*/ ?>

<?php get_header(); ?>
<?php the_post(); ?>
<?php the_post_thumbnail('medium'); ?>
<h1><?php the_title(); ?></h1>
<h2>ここは商品紹介です</h2>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>