<?php get_header(); ?>
<?php
$data = get_posts('post_type=post&posts_per_page=1');
if (isset($data[0])) {
    $id = $data[0]->ID;
    $current_link = get_permalink($data[0]->ID);
}
?>

<div class="container">
    <div class="form" id="form">
        <fieldset <?php if ("0" !== get_option('reception')) echo "disabled"; ?>>
            <h2>参加申し込み</h2>
            <!-- 参加要項 -->
            <div class="requirements">
                <div class="table">
                    <table>
                        <tr>
                            <th>参加料</th>
                            <td><?php the_field('entry_fee', $id); ?></td>
                        </tr>
                        <tr>
                            <th>参加資格</th>
                            <td><?php the_field('entry_qualification', $id); ?></td>
                        </tr>
                        <tr>
                            <th>チーム構成</th>
                            <td><?php the_field('team_configuration', $id); ?></td>
                        </tr>
                        <tr>
                            <th>締切日</th>
                            <td><?php the_field('deadline_date', $id); ?></td>
                        </tr>
                        <tr>
                            <th>注意事項</th>
                            <td><?php the_field('notes', $id); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php /* メインリンク */ ?>
            <div class="mainlink">
                <a class="mainlink__button" href="<?php echo esc_url($current_link); ?>">大会概要</a>
            </div>
            <?php /* 参加状況 */ ?>
            <div class="participation">
                <span class="participation__title">受付状況</span>
                <?php if ("0" === get_option('reception')) : ?>
                    <span class="participation__shape">〇</span>
                    <span class="participation__txt">受付中</span>
                <?php else : ?>
                    <span class="participation__shape">×</span>
                    <span class="participation__txt">受付終了</span>
                <?php endif; ?>
            </div>
            <?php
            // ショートコードを含むテキスト
            $shortcode_text = '[contact-form-7 id="8d74f92" title="参加申し込みフォーム"]';
            // ショートコードを処理して出力する
            echo do_shortcode($shortcode_text);
            ?>

        </fieldset>
    </div>
</div>
</div>

<?php get_footer(); ?>