<?php
//コンテンツ幅をセット
if ( ! isset( $content_width )) {
  $content_width =723;
}


function custom_theme_setup() {

//head内にフィードリンクを出力
add_theme_support('automatic-feed-links');

//タイトルタグを動的に出力
add_theme_support('title-tag');

//ブロックエディタ用のCSSを有効化
add_theme_support('wp-block-styles');

//埋め込みコンテンツをレスポンシブ対応に
add_theme_support('responsive-embeds');

//アイキャッチ画像を有効化
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 231, 177, false );

}

add_action( 'after_setup_theme', 'custom_theme_setup' );

function yukopress_scripts() {

  wp_enqueue_style(
  'style', // cssの識別ID 任意
  get_stylesheet_uri(), // ファイルのパス
  array() // 先に読み込みたい識別IDを引数に入力
  );

  wp_enqueue_script(
  'javascript', // jsの識別ID 任意
  esc_url( get_theme_file_uri( 'js/script.js' ) ), // ファイルのパス
  array(), // 先に読み込みたい識別IDを引数に入力
  true//読み込み位置
);
}
  add_action( 'wp_enqueue_scripts', 'yukopress_scripts' );
