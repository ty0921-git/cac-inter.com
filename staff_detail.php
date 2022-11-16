<?php
require("head.php");

if ($_GET['code']) {
  $code = $_GET['code'];
} else {
  header("location:./");
  exit;
}

$sql = "select*from staff where code='$code'";
$stmt = connect()->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row['display'] == "0") {
  header("location:./");
  exit;
}

$row['code'] = zerop($row['code'], 7);


// カテゴリーリスト生成
$cate_list = getCategoryList("staff");
?>
<link rel="stylesheet" href="css/article.css">
<title><?= h($row['staff_name']) ?> | <?= h($site_catch) ?> <?= h($site_name) ?></title>
</head>

<body>
  <?php
  require("nav.php");
  ?>
  <section class="p-2 p-md-4"></section>

  <section class="container mb-4">
    <a href="./">Home</a> <i class='bx bx-chevron-right'></i> <a href="staff_list.html">スタッフ一覧</a>
  </section>

  <div class="container mb-5">
    <div class="row g-1 g-md-4">
      <div class="col-md-6">


        <?php if ($img = imageCheck("staff", "{$code}_lg_01", false)) : ?>
          <section>
            <img src="<?= $img ?>" name="staff_image" class="img-fluid mb-1">
          </section>
        <?php endif; ?>



      </div>
      <div class="col-md-6">

        <div class="category mb-2">
          <?php
          $cate_codes = getChainCode($code, "staff");
          foreach ($cate_codes as $cate_code) :
            if ($cate_code == "") {
              continue;
            };
          ?>
            <span class="badge bg-sc"><?= h($cate_list[$cate_code['call_code']]) ?></span>
          <?php endforeach; ?>
        </div>

        <?php if ($row['staff_position']) : ?>
          <div class="mb-2"><?= h($row['staff_position']) ?></div>
        <?php endif; ?>

        <h2 class="mb-2"><?= h($row['staff_name']) ?><span class="fs14"> - <?= h($row['staff_name_eg']) ?></span></h2>
        <hr>

        <div class="fs09 mb-1">

          <?php if ($row['staff_birth_day']) :
            $pat = "/(\d{4})-(\d{2})-(\d{2})/u";
            $rep = "$1年$2月$3日生まれ";
            $line = preg_replace($pat, $rep, $row['staff_birth_day']);
          ?>
            <span><?= h($line) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_birth_day'] != "0000-00-00") :
            $birth_day = str_replace("-", "", $row['staff_birth_day']); ?>
            <?= floor((date("Ymd") - $birth_day) / 10000) ?>歳
          <?php endif; ?>

        </div>

        <div class="fs09 mb-3">

          <?php if ($row['staff_blood_type']) : $fg = 1; ?>
            <span><?= h($row['staff_blood_type']) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_height']) : if ($fg == 1) print " / ";
            $fg = 1; ?>
            <span><?= h($row['staff_height']) ?>cm</span>
          <?php endif; ?>

          <?php if ($row['staff_bust']) : if ($fg == 1) print " / ";
            $fg = 1;
            $fgs = 1; ?>
            <span>B<?= h($row['staff_bust']) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_waist']) : if ($fg == 1 && $fgs != 1) print " / ";
            $fg = 1;
            $fgs = 1; ?>
            <span>W<?= h($row['staff_waist']) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_hip']) : if ($fg == 1 && $fgs != 1) print " / ";
            $fg = 1;
            $fgs = 1; ?>
            <span>H<?= h($row['staff_hip']) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_shoes']) : if ($fg == 1) print " / ";
            $fg = 1; ?>
            <span>Shoes <?= h($row['staff_shoes']) ?>cm</span>
          <?php endif; ?>

          <?php if ($row['staff_wear_top']) : if ($fg == 1) print " / ";
            $fg = 1;
            $fgs = 1; ?>
            <span>Tops <?= h($row['staff_wear_top']) ?></span>
          <?php endif; ?>

          <?php if ($row['staff_wear_bottom']) : if ($fg == 1 && $fgs != 1) print " / ";
            $fg = 1;
            $fgs = 1; ?>
            <span>Bottoms <?= h($row['staff_wear_bottom']) ?></span>
          <?php endif; ?>

        </div>


        <?php if ($row['short_description']) : ?>
          <div class="mb-4"><?= h($row['short_description']) ?></div>
        <?php endif; ?>


        <table class="table">
          <tr>
            <th class="border-dark">License</th>
            <td><?= h($row['staff_license']) ?></td>
          </tr>
          <tr>
            <th class="border-dark">Hobby</th>
            <td><?= h($row['staff_hobby']) ?></td>
          </tr>
        </table>


        <div class="d-flex fs12 justify-content-end mt-1">
          <?php if ($row['staff_website']) : ?>
            <a href="<?= h($row['staff_website']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bx-rss'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_facebook']) : ?>
            <a href="<?= h($row['staff_facebook']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-facebook'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_instagram']) : ?>
            <a href="<?= h($row['staff_instagram']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-instagram'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_twitter']) : ?>
            <a href="<?= h($row['staff_twitter']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-twitter'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_youtube']) : ?>
            <a href="<?= h($row['staff_youtube']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-youtube'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_tiktok']) : ?>
            <a href="<?= h($row['staff_tiktok']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-tiktok'></i></a>
          <?php endif; ?>
        </div>


      </div>
    </div>
  </div>


  <section class="container mb-5">
    <h2 class="heading mb-4 mb-md-5"><span>Photography</span> <small>フォト</small></h2>

    <div id="showcase" class="d-none p-3">
      <img src="" class="img-fluid mb-3">
      <a class="text-white cp"><i class="bi bi-x"></i> close</a>
    </div>

    <div class="row row-cols-2 row-cols-md-4 g-3 grid">
      <?php
      for ($i = 1; $i <= 20; $i++) : $num = zerop($i, 2);
        $img = imageCheck("staff", "{$code}_md_{$num}", false);
        if (empty($img)) {
          continue;
        } else {
          $ext = pathinfo($img, PATHINFO_EXTENSION);
        }
      ?>
        <div class="col">
          <img src="<?= $img ?>" class="img-fluid photo cp">
        </div>
      <?php endfor; ?>
    </div>
  </section>


  <?php if ($row['staff_intro']) : ?>
    <section class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div id="article"><?= $row['staff_intro'] ?></div>
        </div>
      </div>
    </section>
  <?php endif; ?>



  <section class="container mb-5">
    <h2 class="heading mb-4 mb-md-5"><span>STAFF</span> <small>スタッフ</small><a href="spot_list.html">スタッフ一覧</a></h2>
    <?php require("staff01_side.php"); ?>
  </section>


  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <?php
  require("foot.php");
  ?>

  <script>
    let img = document.querySelectorAll(".photo");
    let showcase = document.querySelector("#showcase")
    for (let i = 0; i < img.length; i++) {
      img[i].addEventListener("click", function() {
        let src = img[i].getAttribute("src");
        src = src.replace('md', 'lg');
        showcase.querySelector("img").src = src;
        showcase.classList.remove("d-none");
        showcase.classList.add("active");
      });
    }

    showcase.addEventListener("click", function() {
      showcase.classList.add("d-none");
      showcase.classList.remove("active");
    });

    window.addEventListener("DOMContentLoaded", function() {
      img[img.length - 1].addEventListener("load", function() {
        let msnry = new Masonry('.grid', {
          percentPosition: true
        });
      });
    });

    let msnry = new Masonry('.grid', {
      percentPosition: true
    });
  </script>
