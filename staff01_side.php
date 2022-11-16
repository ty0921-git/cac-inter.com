<div class="row row-cols-2 row-cols-md-5 g-1 g-md-4">
  <?php
  $tails = "and code!='$_GET[code]' order by code DESC";
  $rows = get_rows("staff",null,$tails);
  $i = 0;
  foreach ($rows as $row) : $code = zerop($row['code'], 7);
    list($date_regi) = explode(" ", $row['date_regi']);      ?>
    <?php require("staff01.php"); ?>
  <?php endforeach; ?>
</div>
