<?php get_header(); ?>
<div class="conetnts">
  <div class="contents-header">
    <h2 class="contents-header__title"><?php the_archive_title(); ?></h2>
  </div>
  <div class="contents-body">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <!-- 繰り返したい内容　ここから -->
        <li class="entry">
          <div class="entry__inner">
            <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail(); ?>" alt="">
            </a>
            <div class="entry__text">
              <p class="entry__time">
                <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
              </p>
              <h2 class="entry__ttl">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
              </h2>
            </div>
          </div>
        </li>
        <!-- 繰り返したい内容　ここまで -->
      <?php endwhile; ?>
    <?php else : ?>
      <p>まだ投稿はありません。</p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>