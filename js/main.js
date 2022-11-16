// WOW
new WOW().init();

// スクロール位置取得
let nav = document.querySelector("nav");

window.addEventListener("scroll", function () {
  let sc = window.pageYOffset;
  let panel = document.querySelector(".collapse");
  if (panel) {
    panel.classList.remove("show");
  }
  if (sc > 0) {
    nav.classList.add("fixed-top");
  } else {
    nav.classList.remove("fixed-top");
  }
});

// OGPタイトル差し込み
let title = document.title;
let ogp_title = document.head.querySelector("[property $=title]");
ogp_title.content = title;
