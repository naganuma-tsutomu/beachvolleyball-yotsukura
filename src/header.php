<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <!--------------- ios 入力欄タップ時に画面がズームされないようにする記述  始め ---------------->
    <script>
        var ua = navigator.userAgent.toLowerCase();
        var isiOS = (ua.indexOf('iphone') > -1) || (ua.indexOf('ipad') > -1);
        if (isiOS) {
            var viewport = document.querySelector('meta[name="viewport"]');
            if (viewport) {
                var viewportContent = viewport.getAttribute('content');
                viewport.setAttribute('content', viewportContent + ', user-scalable=no');
            }
        }
    </script>
    <!--------------- ios 入力欄タップ時に画面がズームされないようにする記述  終わり ---------------->


    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="rDkRniiSrOzF_k5ccyGpkrfLe4dCJIARBhFrvuNsvlY" />
</head>

<body>
    <div class="main">
        <?php if (is_front_page()) : ?>
            <?php /* TOP画像 */ ?>
            <div class="top">
                <div class="top__backcon"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top01.webp')); ?>" alt="背景" width="100%" class="top__backcon_pc"></div>
                <div class="top__txtcon"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top02.png')); ?>" alt="文字" width="100%" class="">
                </div>
            </div>
        <?php endif; ?>

        <?php /* メニュー */ ?>
        <?php
        $data = get_posts('post_type=post&posts_per_page=1');
        if (isset($data[0])) {
            $current_link = get_permalink($data[0]->ID);
        }
        ?>
        <div class="menu">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php if (is_front_page()) echo "menuactive"; ?>">TOP</a></li>
                <li><a href="<?php echo esc_url($current_link); ?>" class="<?php if (is_single()) echo "menuactive"; ?>">大会概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="<?php if (is_page('contact')) echo "menuactive"; ?>">参加申し込み</a></li>
                <li><a href="<?php echo esc_url(home_url('/#archives')); ?>" class="">大会一覧</a></li>
                <li><a href="<?php echo esc_url(home_url('/inquiry')); ?>" class="<?php if (is_page('inquiry')) echo "menuactive"; ?>">お問い合わせ</a></li>
                <?php /* <li><a href="">協賛一覧</a></li> */ ?>
            </ul>
        </div>
        <div class="hamburger">
            <span></span><span></span><span></span>
        </div>
        <ul class="hamburger-menu">
            <div class="hamburger-menu__logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top02.png')); ?>" alt="文字" width="100%">
            </div>
            <li class="hamburger-menu__list"><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php if (is_front_page()) echo "menuactive"; ?>">TOP</a></li>
            <li class="hamburger-menu__list"><a href="<?php echo esc_url($current_link); ?>" class="<?php if (is_single()) echo "menuactive"; ?>">大会概要</a></li>
            <li class="hamburger-menu__list"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="<?php if (is_page('contact')) echo "menuactive"; ?>">参加申し込み</a></li>
            <li class="hamburger-menu__list hash_js"><a href="<?php echo esc_url(home_url('/#archives')); ?>" class="">大会一覧</a></li>
            <li class="hamburger-menu__list"><a href="<?php echo esc_url(home_url('/inquiry')); ?>" class="<?php if (is_page('inquiry')) echo "menuactive"; ?>">お問い合わせ</a></li>
            <div class="hamburger-menu__close">
                <span>×</span>
            </div>
        </ul>
        <?php if (!is_front_page()) : ?>
            <ul class="breadcrumbs">
                <li class="breadcrumbs__list"><a href="<?php echo esc_url(home_url('/')); ?>" class="menu-top">TOP</a></li>
                <li class="breadcrumbs__list"><?php the_title(); ?><?php if (is_single()) echo " 大会概要"; ?></li>
            </ul>
        <?php endif; ?>