<?php
require("head.php");
?>
<title>COMPONENT | <?= h($site_catch) ?> <?= h($site_name) ?></title>
</head>

<body>
  <?php
  require("nav.php");
  ?>
  <section class="p-2 p-md-4"></section>

  <div class="row">
    <div class="col-md-6">
      <?php
      require("z_hd.php");
      ?>
    </div>
    <div class="col-md-6">
      <?php
      require("z_btn.php");
      ?>
    </div>
  </div>

  <?php
  require("foot.php");
  ?>
