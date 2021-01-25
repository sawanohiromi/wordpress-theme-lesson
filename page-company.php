<?PHP /* 
Template Name: 会社概要
Template Post Type: post, page, evwnt
*/ ?>

<?php get_header(); ?>
<?php the_post(); ?>
<?php the_post_thumbnail('medium'); ?>
<h1><?php the_title(); ?></h1>
<h2>ここは会社概要です</h2>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>