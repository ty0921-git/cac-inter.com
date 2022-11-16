<section class="container mb-5 panel anchor" id="service">
  <h2 class="heading mb-4 mb-md-5"><span>サービス</span> <small>Service</small></h2>
  <div class="row g-2 row-cols-1 row-cols-md-3">
    <?php
    $rows = [
      [
        "thumb" => "image/cont01.jpg",
        "title" => "定期清掃・日常清掃",
        "link" => "",
        "exp" => "日常、清潔に保つための日常清掃と、日常清掃では手の届かないところを清掃する定期清掃のサービスです。"
      ],
      [
        "thumb" => "image/cont02.jpg",
        "title" => "建築・設備保守修繕業務",
        "link" => "",
        "exp" => "建物や機械設備を長期にわたり良好に維持するために必要な点検・調査・清掃を行うサービスです。"
      ],
      [
        "thumb" => "image/cont03.jpg",
        "title" => "ビル・マンション総合管理",
        "link" => "",
        "exp" => "テナント様やオーナー様に代わってビル内の清掃や設備点検などを行うサービスです。"
      ],
    ];
    ?>
    <?php
    $i = 0;
    foreach ($rows as $row) : ?>
      <div class="col wow fadeInUp" data-wow-delay="<?= ($i * 0.1) ?>s">
        <div class="box">
          <a href="<?= $row['link'] ?>" class="thumb thumb01-hold" style="background-image:url(<?= $row['thumb'] ?>);"></a>
          <a href="<?= $row['link'] ?>" class="title"><?= $row['title'] ?></a>
          <div class="exp"><?= $row['exp'] ?></div>
        </div>
      </div>
    <?php $i++;
    endforeach; ?>

  </div>
</section>




<section class="container mb-5 panel anchor" id="service">
  <h2 class="heading mb-4 mb-md-4"><span>定期清掃・日常清掃</span> <small>Cleaning</small></h2>

  <div class="bg-light border p-3 p-md-4 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <?php for ($i = 1; $i <= 9; $i++) : ?>
        <div class="col">
          <div class="box-small">
            <div class="thumb me-4" style="background-image:url(./image/work0<?= $i % 6 + 1 ?>.jpg);"></div>
            <div>
              <h2 class="fs14 mb-3 fc-kc fw-bold">業務タイトル</h2>
              <p>業務内容の説明が入ります。業務内容の説明が入ります。業務内容の説明が入ります。</p>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>

  <div class="mb-4">
    <h2 class="heading mb-4 mb-md-4"><span>定期清掃・日常清掃のご案内</span></h2>
    <div class="d-flex justify-content-center">
      <ol class="fs-md-14 lh-lg">
        <li>清掃業務におきましては長年の実績と経験により、熟練したスタッフによる清掃を実施致します。</li>
        <li>貴施設に適した内容方法を吟味し、適切な価格にてお見積をさせて頂きます。</li>
        <li>自社の優秀な社員にての清掃を誇りを持ってお勧めします。又、他社に負けない金額にてご提供させて頂きます。</li>
        <li>報告書には写真を添付し、清掃前・清掃中・清掃後の状況を分かりやすく報告させて頂きます。</li>
        <li>清掃実施後の状況に必ず満足させて頂きます。</li>
      </ol>
    </div>
  </div>

</section>
