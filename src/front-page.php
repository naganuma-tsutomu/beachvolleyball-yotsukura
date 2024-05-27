<?php get_header(); ?>

<?php
$data = get_posts('post_type=post&posts_per_page=1');
if (isset($data[0])) {
    $current_link = get_permalink($data[0]->ID);
}
?>

<div class="container flont">
    <?php /* ビーチバレーボールよつくら大会とは */ ?>
    <div class="introduction">
        <h1><span>ビーチバレーボール</span><span>よつくら大会</span></h1>
        <p class="introduction__text">
            <span>ビーチバレーボールよつくら大会は、</span>
            <span>いわき市四倉町で開催されるビーチバレーボール大会です。</span>
        </p>
        <p class="introduction__text">
            <span>四倉町の太平洋に面した美しいビーチは、夏には海水浴やマリンスポーツを楽しむ多くの人々で賑わいます。</span>
            <span>特に四倉海水浴場は水質が良く、家族連れや若者に人気のスポットです。</span>
        </p>
        <p class="introduction__text">
            <span>そのビーチで開催されるビーチバレーボールよつくら大会は、毎年多くの方にご参加頂き、四倉町を盛り上げています。</span>
        </p>
        <p class="introduction__text">
            <span>青い海と白い砂浜を舞台に繰り広げられる熱戦は、見る人みんなをワクワクさせ、感動と興奮をもたらします。</span>
        </p>
        <p class="introduction__text">
            <span>ぜひあなたも参加してみませんか？</span>
        </p>
    </div>
    <?php /* メインリンク */ ?>
    <div class="mainlink">
        <a class="mainlink__button" href="<?php echo esc_url($current_link); ?>">大会概要</a>
        <a class="mainlink__button" href="<?php echo esc_url(home_url('/contact')); ?>">申し込み</a>
    </div>
    <?php /* 大会会場 */ ?>
    <div class="place">
        <h2>大会会場</h2>
        <p class="placetext">いわき市四倉町 四倉海水浴場</p>
        <div class="placeblock">
            <div class="placeblock__img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/place.jpg')); ?>" alt="">
            </div>
            <div class="placeblock__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25461.04642845209!2d140.98432!3d37.090099200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602117bffff386df%3A0xc461e1b7e25fcde4!2z5Zub5YCJ5rW35rC05rW05aC0!5e0!3m2!1sja!2sjp!4v1716190024937!5m2!1sja!2sjp" width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php /* メインリンク */ ?>
    <div class="mainlink">
        <a class="mainlink__button" href="<?php echo esc_url($current_link); ?>">大会概要</a>
        <a class="mainlink__button" href="<?php echo esc_url(home_url('/contact')); ?>">申し込み</a>
    </div>
    <?php /* 試合風景 */ ?>
    <div class="slide">
        <h2>試合風景</h2>
        <ul class="slide-items">
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_01.jpg')); ?>" alt=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_02.jpg')); ?>" alt=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_03.jpg')); ?>" alt=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_04.jpg')); ?>" alt=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_05.jpg')); ?>" alt=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/match_scenery_06.jpg')); ?>" alt=""></li>
        </ul>
    </div>

    <?php /* メインリンク */ ?>
    <div class="mainlink">
        <a class="mainlink__button" href="<?php echo esc_url($current_link); ?>">大会概要</a>
        <a class="mainlink__button" href="<?php echo esc_url(home_url('/contact')); ?>">申し込み</a>
    </div>

    <?php /* 大会一覧 */ ?>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>
        <div id="archives" class="archives">
            <h2>大会一覧</h2>
            <ul class="tournament">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="tournament__list">
                        <a class="tournament__list_link" href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url(get_field('main_img')); ?>" alt="">
                            <span><?php the_field('fiscal_year'); ?></span>
                        </a>
                    </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </ul>
        </div>


        <?php /* メインリンク */ ?>
        <div class="mainlink">
            <a class="mainlink__button" href="<?php echo esc_url($current_link); ?>">大会概要</a>
        <a class="mainlink__button" href="<?php echo esc_url(home_url('/contact')); ?>">申し込み</a>
        </div>
    <?php endif; ?>

    <!-- 参加要項 -->
    <!-- <div class="requirements">
        <h2>参加要項</h2>
        <div class="table">
            <table>
                <tr>
                    <th>参加料</th>
                    <td>参加者1名につき1,000円</td>
                </tr>
                <tr>
                    <th>参加資格</th>
                    <td>中学生以上の健康な方</td>
                </tr>
                <tr>
                    <th>チーム構成</th>
                    <td><span class="inlinetxt">1チーム4名 【選手登録は最大6名】</span><span class="inlinetxt">※試合中は2名以上の女性が必ず参加</span><span class="inlinetxt">となります。</span></td>
                </tr>
                <tr>
                    <th>締切日</th>
                    <td>2023年7月14日（金） ※受付終了
                    </td>
                </tr>
            </table>
        </div>
    </div> -->


</div>
</div>

<?php get_footer(); ?>