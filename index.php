<?php
require("head.php");
?>
<link rel="stylesheet" type="text/css" href="js/slick/slick.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/slick/slick.min.js"></script>

<title><?= h($site_catch) ?> | <?= h($site_name) ?></title>
</head>

<body>
  <?php
  require("nav.php");
  ?>
  <div class="text-center mb-5">
    <picture>
      <source srcset="slide/slide01_sp.jpg" media="(max-width:767px)">
      <img class="img-fluid" src="slide/slide01.jpg">
    </picture>
  </div>

  <?php
  // require("block_news.php");
  require("block_contents.php");
  // require("block_archive.php");
  // require("block_staff.php");
  require("foot.php");
  ?>
