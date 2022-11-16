<?php
$img = imageCheck("staff", "{$code}_md_01", true);
$cate_codes = getChainCode($code, "staff");
?>
<div class="col data-list01 wow fadeInUp" data-wow-delay="0.1s">
  <div class="row g-0 g-md-3 g-md-0">
    <div class="col-12 col-md-12">
      <a href="staff_detail_<?= $code ?>.html" class="thumb02" style="background-image:url(<?= $img ?>);"></a>
    </div>
    <div class="col-12 col-md-12">
      <div class="py-2 px-0 py-md-0 px-md-1">
        <div class="category mb-2">
          <?php
          foreach ($cate_codes as $cate_code) :
            if ($cate_code == "") {
              continue;
            };
          ?>
            <span class="badge bg-sc"><?= h($cate_list[$cate_code['call_code']]) ?></span>

          <?php endforeach; ?>
        </div>

        <?php if ($row['staff_position']) : ?>
          <div><small><?= h($row['staff_position']) ?></small></div>
        <?php endif; ?>

        <a class="title" href="staff_detail_<?= $code ?>.html"><?= h($row['staff_name']) ?></a>

        <?php if ($row['staff_name_eg']) : ?>
          - <span><small><?= h($row['staff_name_eg']) ?></small></span>
        <?php endif; ?>


        <div class="d-flex fs12 justify-content-end mt-1">
          <?php if ($row['staff_website']) : ?>
            <a href="<?= h($row['staff_website']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bx-rss' ></i></a>
          <?php endif; ?>
          <?php if ($row['staff_facebook']) : ?>
            <a href="<?= h($row['staff_facebook']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-facebook'></i></a>
          <?php endif; ?>
          <?php if ($row['staff_instagram']) : ?>
            <a href="<?= h($row['staff_instagram']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-instagram' ></i></a>
          <?php endif; ?>
          <?php if ($row['staff_twitter']) : ?>
            <a href="<?= h($row['staff_twitter']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-twitter' ></i></a>
          <?php endif; ?>
          <?php if ($row['staff_youtube']) : ?>
            <a href="<?= h($row['staff_youtube']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-youtube' ></i></a>
          <?php endif; ?>
          <?php if ($row['staff_tiktok']) : ?>
            <a href="<?= h($row['staff_tiktok']) ?>" class="me-1 text-dark" target="_blank"><i class='bx bxl-tiktok' ></i></a>
          <?php endif; ?>
        </div>


      </div>
    </div>
  </div>
</div>