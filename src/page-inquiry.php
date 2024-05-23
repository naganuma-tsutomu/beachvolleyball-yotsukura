<?php get_header(); ?>

<div class="container">
    <div class="inquiry">
        <h2>お問い合わせ</h2>
        <?php
        // ショートコードを処理して出力する
        echo do_shortcode('[contact-form-7 id="4a7c894" title="お問い合わせフォーム"]');
        ?>

    </div>
</div>
</div>

<?php get_footer(); ?>