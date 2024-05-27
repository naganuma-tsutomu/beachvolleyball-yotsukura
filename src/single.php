<?php
/*
Template Name: Custom Template
*/
?>

<?php get_header(); ?>

<div class="container single">

  <!-- ビーチバレーボールよつくら大会とは -->
  <div class="introduction">
    <h1><?php the_title(); ?> <span>ビーチバレーボール</span><span>よつくら大会</span></h1>
    <div class="introduction__flex">
      <div class="introduction__flex_imgblock">
        <img src="<?php echo esc_url(get_field('main_img')); ?>" alt="">
      </div>
      <div class="introduction__flex_txtblock">
        <?php the_field('main_text'); ?>
      </div>
    </div>
  </div>

  <!-- 大会概要 -->
  <div class="overview">
    <h2>大会概要</h2>
    <table>
      <tr>
        <th>名称</th>
        <td>
          <h1><?php the_field('name'); ?></h1>
        </td>
      </tr>
      <tr>
        <th>日時</th>
        <td><?php the_field('time'); ?></td>
      </tr>
      <tr>
        <th>場所</th>
        <td><?php the_field('place'); ?></td>
      </tr>
      <tr>
        <th>主催</th>
        <td><?php the_field('organized'); ?></td>
      </tr>
      <tr>
        <th>共催</th>
        <td><?php the_field('joint_hosting'); ?></td>
      </tr>
      <tr>
        <th>後援</th>
        <td><?php the_field('support'); ?></td>
      </tr>
    </table>
  </div>

  <!-- スケジュール -->
  <div class="schedule">
    <h2>スケジュール</h2>
    <div class="schedule__block">
      <span class="schedule__block_time">07:30 ~ 07:50</span>
      <span class="schedule__block_doing">受付</span>
    </div>
    <div class="schedule__block">
      <span class="schedule__block_time">07:50 ~ 08:10</span>
      <span class="schedule__block_doing">清掃活動（海岸清掃）</span>
    </div>
    <div class="schedule__block">
      <span class="schedule__block_time">08:10 ~ 08:30</span>
      <span class="schedule__block_doing">式典・ラジオ体操</span>
    </div>
    <div class="schedule__competition">
      <span class="schedule__competition_time">08:30 ~ 16:00</span>
      <span class="schedule__competition_doing">競技</span>
    </div>
    <div class="schedule__block">
      <span class="schedule__block_time">16:00 ~ 16:30</span>
      <span class="schedule__block_doing">片付け・清掃</span>
    </div>
  </div>



  <!-- 参加要項 -->
  <div class="requirements">
    <h2>参加要項</h2>
    <div class="table">
      <table>
        <tr>
          <th>参加料</th>
          <td><?php the_field('entry_fee'); ?></td>
        </tr>
        <tr>
          <th>参加資格</th>
          <td><?php the_field('entry_qualification'); ?></td>
        </tr>
        <tr>
          <th>チーム構成</th>
          <td><?php the_field('team_configuration'); ?></td>
        </tr>
        <tr>
          <th>締切日</th>
          <td><?php the_field('deadline_date'); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <?php /* メインリンク */ ?>
  <div class="mainlink">
    <a class="mainlink__button" href="<?php echo esc_url(home_url('/contact')); ?>">申し込み</a>
  </div>

  <?php /* 参加登録2023 */ ?>
  <!-- <div class="form" id="form">
    <h2>参加登録</h2>
    <div class="participation">
      <span class="participation__title">参加状況</span>
      <span class="participation__shape">〇</span>
      <span class="participation__txt">受付中</span>
    </div> -->
  <?php
  // ショートコードを含むテキスト
  /* $shortcode_text = '[contact-form-7 id="8d74f92" title="参加申し込みフォーム"]';
    // ショートコードを処理して出力する
    echo do_shortcode($shortcode_text); */
  ?>

  <!-- </div> -->
</div>
</div>

<?php get_footer(); ?>