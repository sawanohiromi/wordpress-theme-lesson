<?PHP /* 
Template Name: 日報
Template Post Type: post, page, evwnt
*/ ?>

<?php get_header();
the_post();
?>

<div class="main-content">
    <div class="daily">
    <img class="daily__img" src="<?php the_field('img'); ?>" alt="">
    <h2>これは日報用のPHPです</h2> 
    <!-- カスタムフィールド取得 -->
    <p><?PHP the_field('day'); ?></p>
    <p><?PHP the_field('content'); ?></p>
    
    </div>


</div>






<?php get_footer(); ?>