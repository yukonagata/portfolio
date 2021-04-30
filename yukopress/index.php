<?php get_header(); ?>

<h2 class="header__pageTitle">Blog</h2>
        </div><!--/.header__container-->
    </header>
    <!-- グローバルナビ -->
    <nav class="gnavi">
        <ul class="gnavi__list flex">
            <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
            <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/profile/')); ?>">Profile</a></li>
            <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
            <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/stamp/')); ?>">Stamp</a></li>
            <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
    </nav><!--/.gnavi-->
    <img src="<?php echo esc_url( get_theme_file_uri( '/img/wave-profile-y.png' ) ); ?>" alt="" class="wave">
<!-- 共通部分ここまで -->

<div class="container container--blog flex">

<!-- メインエリアここから -->
<main class="main" id="post">

    <!-- Blog -->
    <section class="post__box">
        <h3 class="post__title">投稿一覧</h3>

        <?php if ( have_posts() ) : // もし、投稿が１件以上あったら ?>
        <!-- 投稿があった場合のみ冒頭に表示させる要素（ページ見出しなど） -->
        <?php while ( have_posts() ) : // 投稿の表示条件を満たす間は繰り返す ?>
        <?php the_post(); // データ１件分を取り出して渡す ?>

        <div class="post__wrapper flex">
            <img src="<?php echo esc_url( get_theme_file_uri( '/img/no-image.jpg' ) ); ?>" alt="" class="post__img">
            <article <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><time class="post__time"><?php the_time('Y年n月j日'); ?></time></a>
            <a href="<?php the_permalink(); ?>"><h4 class="post__textTitle"><?php the_title(); ?></h4></a>
            <?php the_excerpt(); ?>
            <?php the_category(); ?>
            </article>
        </div>

        <?php endwhile; // 投稿ループ終了 ?>
        <!-- 投稿があった場合のみ末尾に表示させる要素（ページネーションなど） -->
        <?php endif; // 条件分岐修了 ?>
    </section>
</main>
<!-- メインエリアここまで -->

<?php get_sidebar(); ?>

</div><!--/.container  container--blog flex-->

<?php get_footer(); ?>