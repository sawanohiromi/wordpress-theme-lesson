<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
<?php the_post(); ?>

<div class="main-content">
    <!-- サムネイルの表示 -->
    <?php the_post_thumbnail('medium'); ?>
    <!-- ブログタイトルの表示 -->
    <h1><?php the_title(); ?></h1>
    <!-- 本文の表示　抜粋ではないよ -->
    <p><?php the_content(); ?></p>
</div>
<!-- フッターの読み込み -->
<?php get_footer(); ?>