// メインメニュー
$(function () {
  const main = $(".main");
  const menuPos = $(".menu").position().top;
  let scrollPosition = 0;
  $(window).on("scroll", function () {
    scrollPosition = $(window).scrollTop();
    if (scrollPosition > menuPos && !main.hasClass("fixed")) {
      main.addClass("fixed");
    } else if (scrollPosition <= menuPos && main.hasClass("fixed")) {
      main.removeClass("fixed");
    }
  });
});

// ハンバーガーメニューの挙動
$(".hamburger, .hamburger-menu__close").click(function () {
  $(".hamburger, .hamburger-menu, body").toggleClass("active");
});

// ハンバーガーメニューの挙動
$(window).on("load", function () {
  // URLを取得
  const currentUrl = location.href;
  // ルートURLの取得
  const origin = location.origin + "/";
  const origin_hash = location.origin + "/#archives";

  // TOP
  if (currentUrl == origin || currentUrl == origin_hash) {
    $(".hash_js").click(function () {
      $(".hamburger, .hamburger-menu, body").toggleClass("active");
    });
  }
});

lightbox.option({
  wrapAround: true, //グループ最後の写真の矢印をクリックしたらグループ最初の写真に戻る
  albumLabel: " %1 / total %2 ", //合計枚数中現在何枚目かというキャプションの見せ方を変更できる
});

function fadeAnime() {
  // flipLeft
  $(".gallery li").each(function () {
    let elemPos = $(this).offset().top;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("flipLeft");
    } else {
      $(this).removeClass("flipLeft");
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  fadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  fadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまでページが読み込まれたらすぐに動かしたい場合の記述

document.onkeydown = function (event) {
  if (event.target.tagName == "INPUT" && event.keyCode == 13) {
    return false;
  }
};
