<?php get_header(); ?>

<div class="container">
    <div class="inquiry">
        <h2>お問い合わせ</h2>
        <?php
        // ショートコードを含むテキスト
        $shortcode_text = '[contact-form-7 id="33" title="お問い合わせフォーム"]';
        // ショートコードを処理して出力する
        echo do_shortcode($shortcode_text);
        ?>

    </div>
</div>
</div>

<?php get_footer(); ?>