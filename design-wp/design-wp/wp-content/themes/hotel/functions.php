<?php 
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );

/**
 * コメント投稿フォームの「名前」「メールアドレス」「ウェブサイト」の項目を削除する
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
  $args['author'] = '';
  $args['email'] = '';
  $args['url'] = '';
  return $args;
}

/**
 * <head>内にRSSのlink要素を出力する
 */
add_theme_support( 'automatic-feed-links' );

/**
 * RSSに配信する文字数を設定する
 */
function my_excerpt_mblength( $length ) {
  return 100;
}

/**
 * RSSに「続きを読む」のリンクを追加する
 */
add_filter('excerpt_more', 'my_excerpt_more');
function my_excerpt_more() {
    return '...<a href="'. get_permalink() . '">続きを読む→</a>';
}

/**
 * 記事一覧をカスタマイズする
 */
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts($query) {
  if ( is_admin() || ! $query->is_main_query() ){
    return;
}

  if ( $query->is_home() ) {
    $query->set( 'posts_per_page', 3 );
    $query->set( 'category_name', 'news' );
    return;
  }
}
