<?PHP get_header(); ?>

<div class="main-content">
    <h2>日報一覧</h2>

    <div class="card-box">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="blog-content" >
            <!-- 繰り返し処理する内容 -->
            <a href="<?PHP the_permalink(); ?>">
                <div class="card">
                        <h2 class="card__title"><?php the_title(); ?></h2>
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
</div>

<?PHP get_footer(); ?>