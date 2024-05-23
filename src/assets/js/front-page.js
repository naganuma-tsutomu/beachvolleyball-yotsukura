// const hh = document.getElementById("form");
// hh.addEventListener("click", function () {
//   gsap.to(".schedule", {
//     x: -100,
//   });
// });

$(".slide-items").slick({
  autoplay: true, //自動再生
  autoplaySpeed: 3000, //自動再生の速度
//   arrows: true, //前へ・次への矢印ナビを表示
//   dots: true, //ドット型のナビを表示
  infinite: true, //無限ループ
  centerMode: true, // 前後スライドを部分表示
  centerPadding: "10%", // 両端の見切れるスライド幅
});
