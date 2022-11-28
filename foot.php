<section class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <div class="contact-box px-4 py-md-5 px-md-4">

        <div class="text-center mb-4">
          <h2 class="fc-kc">お問い合わせ</h2>
          <small>contact</small>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-md-4 mb-4">

          <div class="col partition">
            <div class="d-flex align-items-center justify-content-center p-3">
              <i class='bx bx-fw bx-mobile-alt bx-lg'></i>
              <div>
                <div>お電話でのお問い合わせ</div>
                <?php if ($com_free_dial) : ?>
                  <h2><a href="tel:<?= $com_free_dial ?>"><?= $com_free_dial ?></a></h2>
                <?php else : ?>
                  <h2><a href="tel:<?= $com_tel ?>"><?= $com_tel ?></a></h2>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="d-flex align-items-center justify-content-center p-3">
              <i class='bx bx-fw bx-message-square-dots bx-lg'></i>
              <div>
                <div class="mb-1">ご質問・お問い合わせ</div>
                <a href="contact_form.html" class="btn btn-btn">お問い合わせフォーム</a>
              </div>
            </div>
          </div>

        </div>

        <div class="text-md-center">弊社へのご質問・ご不明な点などがありましたら、お気軽にお問い合わせください。</div>

      </div>
    </div>
  </div>
</section>



</main>

<footer class="px-3">
  <div class="container">
    <div class="row row-cols-1 row-cols-2 row-cols-md-4 g-5 mb-4">

      <div class="col-12 col-md-6">
        <div class="d-flex align-items-center">
          <div class="me-2">
            <a href="./"><img src="<?= $logo ?>" class="img-fluid logo-foot" alt="<?= $site_catch ?> <?= $site_name ?>"></a>
          </div>
          <div class="fs12 fs-md-14"><?= h($com_name) ?></div>
        </div>

        <hr>
        <div class="fs10">
          <div>〒<?= h($com_zip) ?> <?= h($com_add) ?></div>
          <div><a href=" tel:<?= h($com_tel) ?>">TEL <?= h($com_tel) ?></a> / FAX <?= h($com_fax) ?></div>
        </div>
      </div>

      <div class="col d-none d-md-block">
        <h2>Service</h2>
        <ul>
          <li><a href="#service">定期清掃・日常清掃</a></li>
          <li><a href="#service">建築・設備保守修繕業務</a></li>
          <li><a href="#service">ビル・マンション総合管理</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-3">
        <h2>About Us</h2>
        <ul>
          <li><a href="privacy.html">プライバシーポリシー</a></li>
          <li><a href="rec_form.html">求人情報</a></li>
          <li><a href="contact_form.html">お問い合わせ</a></li>
          <li><a href="about.html">会社概要</a></li>
        </ul>
      </div>

    </div>


    <?php
    require("sns_link.php");
    ?>



  </div>
</footer>

<div class="copyright py-2">Copyright <?= date("Y") ?> <?= h($com_copyright_name) ?> Allright Reserved.</div>



<script src="js/wow.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
<?= get_cdn_footer() ?>


</body>

</html>
