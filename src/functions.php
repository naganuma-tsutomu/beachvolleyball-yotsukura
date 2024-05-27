<?php
// ----------------------------------------------------------------------------- css、jquery読み込み
add_action('wp_enqueue_scripts', function () {

  // WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');

  // jQueryを読み込む
  wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/library/jquery-3.6.0.min.js'), array(), '3.6.0', true);

  // サイト全体でのJS
  wp_enqueue_script('global', get_theme_file_uri('/assets/js/common.js'), array(), null, true);

  // 日時指定で要素に変化をつけるjs
  wp_enqueue_script('timer', get_theme_file_uri('/assets/js/view_timer.js'), array(), null, true);


  wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), null, 'all');

  if (is_front_page()) {
    wp_enqueue_style('front-page', get_theme_file_uri('/assets/css/front-page-style.css'), array(), null, 'all');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/lib/slick.css'), array(), null, 'all');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/lib/slick-theme.css'), array(), null, 'all');
    wp_enqueue_script('slick', get_theme_file_uri('/assets/js/library/slick.min.js'), array(), '3.6.0', true);
    wp_enqueue_script('front-page-js', get_theme_file_uri('/assets/js/front-page.js'), array('jquery'), null, true);
  }

  // ------------------------------------------ 参加申込確認画面
  else if (is_page('contact-confirm')) {
    wp_enqueue_style('contact-confirm', get_theme_file_uri('/assets/css/page-contact-confirm.css'), array(), null, 'all');
  } else if (is_page('contact-thanks')) {
    wp_enqueue_style('contact-thanks', get_theme_file_uri('/assets/css/page-contact-thanks.css'), array(), null, 'all');
  }

  // ------------------------------------------ 大会要項
  else if (is_page('requirements')) {
    wp_enqueue_style('requirements', get_theme_file_uri('/assets/css/page-requirements.css'), array(), null, 'all');
  }

  // ------------------------------------------ お問い合わせ
  else if (is_page('inquiry')) {
    wp_enqueue_style('inquiry', get_theme_file_uri('/assets/css/page-inquiry.css'), array(), null, 'all');
  } else if (is_page('inquiry-confirm')) {
    wp_enqueue_style('inquiry-confirm', get_theme_file_uri('/assets/css/page-inquiry-confirm.css'), array(), null, 'all');
  } else if (is_page('inquiry-thanks')) {
    wp_enqueue_style('inquiry-thanks', get_theme_file_uri('/assets/css/page-inquiry-thanks.css'), array(), null, 'all');
  }

  // シングルページ
  else if (is_single()) {
    wp_enqueue_style('single', get_theme_file_uri('/assets/css/single.css'), array(), null, 'all');
  }
});
