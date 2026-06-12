jQuery(document).ready(function ($) {

  $('.bento-menu__block').each(function () {
    const $block = $(this);

    // p-countクラスのテキストから数値（個数）だけを抽出して変換
    // ※「個数：2個」のような文字が入っていても、数字だけを抜き出して「2」にします
    const countText = $block.find('.p-count').text().replace(/[^0-9]/g, '');
    const count = parseInt(countText, 10) || 0;

    if (count === 0) {
      // 0個ならお弁当のブロックごと画面から消去
      $block.remove();
    } else if (count > 0) {
      // 1個以上選択されている場合は表示を確実にする
      $block.show();

      // HTMLの data-price=から単価を取得
      const price = parseInt($block.data('price'), 10) || 0;
      
      // 各お弁当のブロック内に「個数」と「3桁区切りの小計」を出力
      $block.find('.p-subtotal').html(`<strong>${price.toLocaleString()}</strong>`);
    }
  });

  const $total_num = $('.bento-total__num');
  const grandTotal = parseInt($total_num.data('total'), 10) || 0;

  // 合計金額（3桁区切り）を画面に反映
  $total_num.find('.bento-total__section').text(grandTotal.toLocaleString());
});