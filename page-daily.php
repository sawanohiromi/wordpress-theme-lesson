<?PHP /* 
Template Name: 日報
Template Post Type: post, page, evwnt
*/ ?>

<?php get_header(); ?>
<br>
<br>
<br>
<br>
<br>

<!-- カスタムフィールド取得 -->
<p><?PHP the_field('day'); ?></p>
<p><?PHP the_field('content'); ?></p>
<img src="<?php the_field('img'); ?>" alt="">





<?php get_footer(); ?>