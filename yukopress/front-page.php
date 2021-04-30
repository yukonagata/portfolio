<?php get_header(); ?>


        <img src="<?php echo esc_url( get_theme_file_uri( '/img/bg-header-t.png' ) ); ?>" alt="" class="header__cloud">
        <h1 class="header__title">YukoPress</h1>
        <p class="header__text">WordPress実装の練習用ページ</p>
    </div><!--/.header__container-->
</header>

<img src="<?php echo esc_url( get_theme_file_uri( '/img/wave-profile-y.png' ) ); ?>" alt="" class="wave">
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

<div class="container">

<!-- メインエリアここから -->
<?php if ( have_posts() ) : // もし、投稿が１件以上あったら ?>
<!-- 投稿があった場合のみ冒頭に表示させる要素（ページ見出しなど） -->
<?php while ( have_posts() ) : // 投稿の表示条件を満たす間は繰り返す ?>
<?php the_post(); // データ１件分を取り出して渡す ?>
<main class="main">
<?php the_content(); ?>
    <!-- インロトダクション -->
    <!-- <div class="main__section intro">
        <p class="intro__text">yukoのWordPress練習用ブログサイトです。
            <br>まずは静的サイトを作って、ワードプレス化していく予定です。
            <br>（…カスタム投稿も、やるぞ…）</p>
        <p class="intro__text">「標準デザイン講座」のテキストと、授業で習ったことをベースに、
            <br>Local by FlywheelとVS Codeで作成します。</p>
        </div>
        <?php endwhile; // 投稿ループ終了 ?>
        <!-- 投稿があった場合のみ末尾に表示させる要素（ページネーションなど） -->
        <?php endif; // 条件分岐修了 ?>
</main>
<!-- メインエリアここまで -->
</div><!--/.container-->

<?php get_footer(); ?>