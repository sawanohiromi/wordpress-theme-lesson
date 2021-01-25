<?PHP /* 
Template Name: 日報
Template Post Type: post, page, evwnt
*/ ?>

<?php get_header();
the_post();
?>
<br>
<br>
<br>
<br>
<br>

<?PHP the_post_thumbnail(); ?>
<h2>これは日報用のPHPです</h2> 

<!-- カスタムフィールド取得 -->
<p><?PHP the_field('day'); ?></p>
<p><?PHP the_field('content'); ?></p>
<img src="<?php the_field('img'); ?>" alt="">





<?php get_footer(); ?>