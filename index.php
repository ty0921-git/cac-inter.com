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
  require("slider_slick.php");
  // require("block_news.php");
  require("block_contents.php");
  // require("block_archive.php");
  // require("block_staff.php");
  require("foot.php");
  ?>
