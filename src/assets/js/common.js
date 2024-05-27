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






$(window).on("load", function () {
  // URLを取得
  const currentUrl = location.href;
  // パスの取得
  const path = location.pathname;
  // ページ内アンカーの取得
  const anc = location.hash;

  // TOP
  if (currentUrl == "https://beachvolleyball-yotsukura.com/") {
    $(".menu-top").addClass("menuactive");
  }

  // 参加登録
  if (
    anc == "#form" ||
    path == "/contact-confirm/" ||
    path == "/contact-thanks/"
  ) {
    $(".menu-form").addClass("menuactive");
  }

  // 大会要項
  if (path == "/requirements/") {
    $(".menu-requirements").addClass("menuactive");
  }

  // お問い合わせページ
  if (
    path == "/inquiry/" ||
    path == "/inquiry-confirm/" ||
    path == "/inquiry-thanks/"
  ) {
    $(".menu-inquiry").addClass("menuactive");
  }
});
