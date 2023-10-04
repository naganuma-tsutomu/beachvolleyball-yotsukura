<?php get_header(); ?>


<div class="container">

    <!-- ビーチバレーボールよつくら大会とは -->
    <div class="introduction">
        <h2>はじめに</h2>
        <div class="introduction__flex">
            <div class="introduction__flex_imgblock">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/beachvalley02.jpg')); ?>" alt="紹介画像02" class="img02" width="100%">
            </div>
            <div class="introduction__flex_txtblock">
                <p>
                    夏本番真っ盛り！！<br>
                    太陽が暑く照りつける季節がやってきました。<br>
                    今年も四倉海岸の砂浜でビーチバレーが開催されます。<br>
                    中学生から大人まで誰でも楽しめる大会となっています。<br>
                    皆さまの白熱したプレーでビーチバレーを盛り上げましょう。<br>
                    2023夏！ビーチバレーボールよつくら大会！<br>
                    四倉海岸でお待ちしています！
                </p>
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
                    <h1><span class="inlinetxt">ビーチバレーボール</span><span class="inlinetxt">よつくら大会</span></h1>
                </td>
            </tr>
            <tr>
                <th>日時</th>
                <td><span class="inlinetxt">2023年7月23日（日）</span><span class="inlinetxt">午前7時30分～</span></td>
            </tr>
            <tr>
                <th>場所</th>
                <td>四倉海水浴場</td>
            </tr>
            <tr>
                <th>主催</th>
                <td><span class="inlinetxt">四倉地区ビーチバレーボール</span><span class="inlinetxt">大会実行委員会</span></td>
            </tr>
            <tr>
                <th>共催</th>
                <td>四倉地区体育協会</td>
            </tr>
            <tr>
                <th>後援</th>
                <td>いわき市<br>
                    四倉町観光協力会<br>
                    四倉ふれあい市民会議<br>
                    いわき東ライオンズクラブ</td>
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
            <span class="schedule__block_time">08:00 ~ 08:20</span>
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
    </div>


    <!-- 参加登録 2023 -->
        <?php /* <div class="form" id="form">
            <h2>参加登録</h2>
            <div class="participation">
                <span class="participation__title">参加状況</span>

                <!-- 変更箇所 -->
                <span class="participation__shape">〇</span>


                <!-- 変更箇所 -->
                <span class="participation__txt">受付中</span>
            </div>
            <?php
            // ショートコードを含むテキスト
            $shortcode_text = '[contact-form-7 id="23" title="参加申し込みフォーム"]';
            // ショートコードを処理して出力する
            echo do_shortcode($shortcode_text);
            ?>

        </div> */ ?>
</div>
</div>

<?php get_footer(); ?>