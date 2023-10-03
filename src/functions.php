<?php
// ----------------------------------------------------------------------------- css、jquery読み込み
add_action('wp_enqueue_scripts', function () {

  // WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');

  // jQueryを読み込む
  wp_enqueue_script('jquery', get_theme_file_uri('/js/library/jquery-3.6.0.min.js'), array(), '3.6.0', true);

  // サイト全体でのJS
  wp_enqueue_script('global', get_theme_file_uri('/js/common.js'), array(), null, true);
  
  // 日時指定で要素に変化をつけるjs
  wp_enqueue_script('timer', get_theme_file_uri('/js/view_timer.js'), array(), null, true);


  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style')
  );

  if (is_front_page()) {
    wp_enqueue_style('front-page', get_theme_file_uri('/css/front-page.css'), array(), null, 'all');
    wp_enqueue_script('front-page-js', get_theme_file_uri('/js/front-page.js'), array('jquery'), null, true);
  }

  // ------------------------------------------ 参加申込確認画面
  else if (is_page('contact-confirm')) {
    wp_enqueue_style('contact-confirm', get_theme_file_uri('/css/page-contact-confirm.css'), array(), null, 'all');
  }
  else if (is_page('contact-thanks')) {
    wp_enqueue_style('contact-thanks', get_theme_file_uri('/css/page-contact-thanks.css'), array(), null, 'all');
  }

  // ------------------------------------------ 大会要項
  else if (is_page('requirements')) {
    wp_enqueue_style('requirements', get_theme_file_uri('/css/page-requirements.css'), array(), null, 'all');
  }

  // ------------------------------------------ お問い合わせ
  else if (is_page('inquiry')) {
    wp_enqueue_style('inquiry', get_theme_file_uri('/css/page-inquiry.css'), array(), null, 'all');
  }
  else if (is_page('inquiry-confirm')) {
    wp_enqueue_style('inquiry-confirm', get_theme_file_uri('/css/page-inquiry-confirm.css'), array(), null, 'all');
  }
  else if (is_page('inquiry-thanks')) {
    wp_enqueue_style('inquiry-thanks', get_theme_file_uri('/css/page-inquiry-thanks.css'), array(), null, 'all');
  }
});



/** WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル*/
define('WP_SCSS_ALWAYS_RECOMPILE', true);
