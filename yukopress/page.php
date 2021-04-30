<?php get_header(); ?>
        <h2 class="header__pageTitle"><?php the_title();?></h2>
    </div><!--/.header__container-->
</header>

<!-- グローバルナビ -->
<nav class="gnavi">
    <ul class="gnavi__list flex">
        <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
        <li class="gnavi__item current"><a href="<?php echo esc_url(home_url('/profile/')); ?>">Profile</a></li>
        <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
        <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/stamp/')); ?>">Stamp</a></li>
        <li class="gnavi__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
    </ul>
</nav><!--/.gnavi-->
<img src="<?php echo esc_url( get_theme_file_uri( '/img/wave-profile-y.png' ) ); ?>" alt="" class="wave">
<!-- 共通部分ここまで -->

<div class="container">

<!-- メインエリアここから -->
<main class="main">
    <?php if ( have_posts() ) : // もし、投稿が１件以上あったら ?>
    <!-- 投稿があった場合のみ冒頭に表示させる要素（ページ見出しなど） -->
    <?php while ( have_posts() ) : // 投稿の表示条件を満たす間は繰り返す ?>
    <?php the_post(); // データ１件分を取り出して渡す ?>

    <!-- profile -->
        <section class="profile">
            <?php the_content(); ?>
        </section>
        <?php endwhile; // 投稿ループ終了 ?>
    <!-- 投稿があった場合のみ末尾に表示させる要素（ページネーションなど） -->
    <?php endif; // 条件分岐修了 ?>
</main>
<!-- メインエリアここまで -->
</div><!--/.container-->

<?php get_footer(); ?>