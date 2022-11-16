<link rel="stylesheet" href="js/nivo/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="js/nivo/nivo-slider.css" type="text/css" media="screen" />
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/nivo/jquery.nivo.slider.js"></script>

<script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider({
      effect: 'random', // エフェクト
      slices: 15, // slice時のスライスされる幅
      boxCols: 10, // box時のボックスの大きさ
      boxRows: 5,
      animSpeed: 500, // アニメーションスピード
      pauseTime: 4000, // スライドする間隔
      startSlide: 0, // 開始画像（0からスタート）
      directionNav: true, // 両端の矢印ナビ
      directionNavHide: true, // 上記ナビをマウスオーバーで表示させるか、最初から表示させておくか
      controlNav: false, // 画像の下にあるページナビ
      controlNavThumbs: false, // 上記ナビをサムネイルにするかどうか
      pauseOnHover: true, // マウスオーバーでスライドを停止／動作
      manualAdvance: false, // 自動スライドの有効／無効
      prevText: 'Prev', // directionNavの「前」のテキスト
      nextText: 'Next', // directionNavの「次」のテキスト
      randomStart: false, // 開始画像をランダムで表示／非表示
    });
  });
</script>

<div class="slider-wrapper theme-default mb-5">
  <div id="slider" class="nivoSlider">
    <img src="slide/slide01.jpg" data-thumb="slide/slide01.jpg" title="#htmlcaption" />
    <img src="slide/slide02.jpg" data-thumb="slide/slide02.jpg" />
    <img src="slide/slide03.jpg" data-thumb="slide/slide03.jpg" />
    <img src="slide/slide04.jpg" data-thumb="slide/slide04.jpg" />
  </div>
  <div id="htmlcaption" class="nivo-html-caption">
    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
  </div>
</div>
