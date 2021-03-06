<?PHP get_header(); ?>

<div class="main-content">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="blog-content" >
            <a href="<?PHP the_permalink(); ?>">
                <div class="post">
                    <img src="<?PHP the_post_thumbnail_url(); ?> " alt="" class="post__img">
                        <div class="post__content">
                        <h2 class="post__title"><?php the_title(); ?></h2>
                        <?PHP echo "<p class='post__text'>" . get_the_excerpt() . "</p>"; ?>
                        <a href="#"><?php the_category(); ?></a><a href="#"><?php the_time(); ?></a>

                </div>

            </div>

        </a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿データが取得できない場合の処理 -->
            <p>投稿がありません</p>
        <?php endif; ?>
</div>

<?PHP get_footer(); ?>