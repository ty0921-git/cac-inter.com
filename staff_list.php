<?php
require("head.php");

$table = "staff";
$call_code=null;

// データ件数取得
$tails=null;
$cnt = get_rows_cnt($table,$call_code,$tails);

// 表示データ設定
$disp_data = 50;

// ページ数
$page_num = ceil($cnt / $disp_data);

// 開始ページ
if ($_GET['start']) {
  $start = $_GET['start'] * $disp_data;
} else {
  $start = 0;
}

// カテゴリーリスト生成
$cate_list=getCategoryList($table);
?>
<title>スタッフ一覧 | <?= h($site_catch) ?> <?= h($site_name) ?></title>
</head>

<body>
  <?php
  require("nav.php");
  ?>

  <section class="p-2 p-md-4"></section>


  <section class="container mb-4 mb-md-5">
    <h2 class="heading"><span>Staff</span> <small>スタッフ</small></h2>
  </section>

  <section class="container mb-5">
    <div class="row row-cols-2 row-cols-md-4 g-3 g-md-5 g-md-3">
      <?php
      $tails = "order by code ASC limit $start,$disp_data";
      $rows = get_rows($table,$call_code,$tails);
      foreach ($rows as $row) : $code = zerop($row['code'], 7);
      ?>
        <?php require("staff01.php"); ?>
      <?php endforeach; ?>
    </div>
  </section>


  <section class="d-flex justify-content-center mb-5">
    <nav>
      <ul class="pagination">

        <?php for ($i = 0; $i < $page_num; $i++) : ?>
          <li class="page-item"><a class="page-link" href="?start=<?= $i ?>"><?= $i + 1 ?></a></li>
        <?php endfor; ?>

      </ul>
    </nav>
  </section>




  <?php
  require("foot.php");
  ?>
