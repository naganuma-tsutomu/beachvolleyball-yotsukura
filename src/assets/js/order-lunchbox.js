const { Input } = require("postcss");

jQuery(document).ready(function ($) {
    // 必要な要素をjQueryオブジェクトとして取得
    const $selectBoxes = $('.bento-select');
    const $summaryContainer = $('#bento-summary-container');
    const $totalNumDisplay = $('#bento-total-num');
    const $countDisplay = $('#bento-total-count');

    function updateBentoCalculation() {
        let grandTotal = 0; // 合計金額を初期化
        let totalCount = 0; // 合計個数を初期化
        let itemsHTML = '';
        let hasSelection = false;

        // 各セレクトボックスをループ処理
        $selectBoxes.each(function () {
            const $select = $(this);
            // 選択された個数を数値に変換
            const count = parseInt($select.val(), 10) || 0;

            // 親要素（.bento-menu__block）から価格と名前を取得
            const $block = $select.closest('.bento-menu__block');

            // 1個以上選択されている場合
            if (count > 0) {
                hasSelection = true;

                const price = parseInt($block.data('price'), 10); // data-price属性から取得
                const count = parseInt($select.val(), 10) || 0; // 選択された個数
                totalCount += count;
                const name = $block.data('name');                // data-name属性から取得

                // 小計（単価 × 個数）
                const subtotal = price * count;
                grandTotal += subtotal;

                // .bento-menu__block内にあるhiddenフィールドを探して、小計を書き込む
                $block.find('input[name*="select-bento-total"]').val(subtotal);

                // 内訳HTMLを組み立て
                itemsHTML += `
          <div class="bento-summary-item">
            <span class="summary-name">・${name}</span>
            <span class="summary-times"> × </span>
            <span class="summary-count">${count}</span>
            <span class="summary-unit">個</span>
            <span class="summary-equal"> = </span>
            <span class="summary-subtotal">${subtotal.toLocaleString()}</span>
            <span class="summary-unit">円</span>
          </div>
        `;
            }else{
            // .bento-menu__block内にあるhiddenフィールドを探して、小計を書き込む
            $block.find('input[name*="select-bento-total"]').val('');
            }
        });

        // 集計した合計個数を画面に反映！
        $countDisplay.text(totalCount); 

        // 画面への描画と値のセット
        if (!hasSelection) {
            $summaryContainer.html('<div class="bento-summary-placeholder">お弁当が選択されていません。</div>');
            $totalNumDisplay.text('0');
            if ($totalNumDisplay.length) $totalNumDisplay.val('0円');
        } else {
            $summaryContainer.html(itemsHTML);
            $totalNumDisplay.text(grandTotal.toLocaleString());
            if ($totalNumDisplay.length) $totalNumDisplay.val(grandTotal.toLocaleString() + '円');
        }

        // 全体の合計個数・合計金額のhiddenフィールドにも値を保存
        // $totalNumDisplay.val(grandTotal);
        // $countDisplay.val(totalCount);

        // .bento-menu__block内にあるhiddenフィールドを探して、小計を書き込む
        $('.bento-total-row').find('input[name="bento-total-count"]').val(totalCount);
        $('.bento-total-row').find('input[name="bento-total-num"]').val(grandTotal);


        // .order-check内にあるhiddenフィールドを探して、合計個数を書き込む
        // $('.bento-total').find('input[name="bento-total-count"]').val(totalCount);
        // .bento-total-row内にあるhiddenフィールドを探して、合計金額を書き込む
        // $('.bento-total').find('input[name="bento-total-num"]').val(grandTotal);
    }

    // セレクトボックスに変更があったら再計算を実行
    $selectBoxes.on('change', updateBentoCalculation);

    // 初回読み込み時にも計算を実行
    updateBentoCalculation();

    // ページバックで値が残っている場合の対応（ブラウザによってはセレクトの値が保持されるため）
    $(window).on('pageshow', function () {
        updateBentoCalculation();
    });
});