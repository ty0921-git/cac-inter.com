<script>
  jQuery(function($) {
    $('.slider').on('init', function() {
      $('.slick-caption h2').addClass('on-fade');
      $('.slick-caption p').addClass('on-fade');
    });
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: false,
      centerMode: true,
      centerPadding: '10%',
      arrows: false,
      useTransform: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: 0,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
    $('.slider').on('beforeChange', function() {
      $('.slick-caption h2').removeClass('on-fade');
      $('.slick-caption p').removeClass('on-fade');
    });
    $('.slider').on('afterChange', function() {
      $('.slick-caption h2').addClass('on-fade');
      $('.slick-caption p').addClass('on-fade');
    });
  });
</script>

<div class="slider mb-5 mt-3">
  <div class="px-2 px-md-4 slick-item">
    <picture>
      <source srcset="slide/slide01_sp.jpg" media="(max-width:767px)">
      <img class="img-fluid" src="slide/slide01.jpg">
    </picture>
    <div class="slick-caption">
      <h2 class="mb-2">キャッチコピー</h2>
      <p class="">説明ショート文</p>
    </div>
  </div>
  <div class="px-2 px-md-4 slick-item">
    <picture>
      <source srcset="slide/slide02_sp.jpg" media="(max-width:767px)">
      <img class="img-fluid" src="slide/slide02.jpg">
    </picture>
    <div class="slick-caption">
      <h2 class="mb-2">キャッチコピー</h2>
      <p class="">説明ショート文</p>
    </div>
  </div>
  <div class="px-2 px-md-4 slick-item">
    <picture>
      <source srcset="slide/slide03_sp.jpg" media="(max-width:767px)">
      <img class="img-fluid" src="slide/slide03.jpg">
    </picture>
    <div class="slick-caption">
      <h2 class="mb-2">キャッチコピー</h2>
      <p class="">説明ショート文</p>
    </div>
  </div>
</div>
