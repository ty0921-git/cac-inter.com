<?php
require("head.php");
?>
<title>求人情報 | <?= h($site_catch) ?> <?= h($site_name) ?></title>
</head>

<body>
  <?php
  require("nav.php");
  ?>
  <section class="p-2 p-md-4"></section>


  <section class="container mb-5">
    <h2 class="heading"><span>求人情報</span> <small>Recruit</small></h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="py-4 px-4 text-md-center">
          弊社では、一緒に働いてくれる方を募集しております。<br>
          ご興味がある方や求人に関するお問い合わせは、下記フォームより送信してください。
        </div>
      </div>
    </div>
  </section>


  <section class="container mb-5">
    <h3 class="heading"><span>お電話でのお問い合わせ</span></h3>
    <div class="text-center py-4">
      <?php if (!$com_free_dial && $com_tel) : ?>
        <div class="display-5"><a href="tel:<?= $com_tel ?>"><?= $com_tel ?></a></div>
      <?php endif; ?>
      <?php if ($com_free_dial) : ?>
        <div class="display-5"><a href="tel:<?= $com_free_dial ?>"><?= $com_free_dial ?></a></div>
      <?php endif; ?>
      受付時間 : <?= $com_hour ?>
    </div>
  </section>



  <section class="container mb-5">
    <h3 class="heading"><span>応募フォーム</span> <small>Application Form</small></h3>


    <form action="rec_regi.php" method="POST" class="py-4">
      <div class="row justify-content-center">
        <div class="col-md-7">

          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="name">
            <label for="name">お名前<b>*</b></label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="tel" class="form-control" id="tel" placeholder="tel">
            <label for="tel">TEL<b>*</b></label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
            <label for="email">メール<b>*</b></label>
          </div>

          <div class="form-floating mb-5">
            <textarea class="form-control" name="comments" placeholder="comments" id="comments" style="height: 200px"></textarea>
            <label for="comments">メッセージ</label>
          </div>

          <div class="mb-5">
            <h4 class="mb-3">個人情報の取り扱いについて</h4>
            <p><a href="privacy.html" target="_blank">プライバシーポリシー</a>をご確認の上、同意していただける場合は「プライバシーポリシーに同意する」にチェックを入れてください。</p>
            <div class="bg-light p-3">
              <input type="checkbox" id="privacy_check" class="form-check-input">
              <label for="privacy_check" class="form-check-label">プライバシーポリシーに同意する</label>
            </div>
          </div>

          <div class="text-center">
            <input class="btn btn-btn" id="submit" type="submit" value="送信する" disabled>
            <input type="hidden" name="csrf_token" value="<?= setToken() ?>">
          </div>

        </div>
      </div>
    </form>
  </section>



  <?php
  require("foot.php");
  ?>


  <script>
    submit = document.querySelector("#submit");
    check = document.querySelector("#privacy_check");
    check.addEventListener("change", function() {
      submit.disabled = !check.checked;
    });
  </script>
