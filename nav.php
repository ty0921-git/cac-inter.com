<header>
  <nav>
    <div class="container d-flex justify-content-between">

      <div class="logo-head">
        <?php
        if ($logo = imageCheck("image", "logo-dark", false)) :
        ?>
          <a href="./"><img src="<?= $logo ?>" width="70" class="img-fluid" alt="<?= $site_catch ?> <?= $site_name ?>"></a>
          <h1 class="fs14" style="white-space:nowrap;"><?= $site_catch ?><?= $site_name ?></h1>
        <?php else : ?>
          <h1 class="fs06 mb-1"><?= $site_catch ?></h1>
          <a class="navbar-brand" href="./"><?= $site_name ?></a>
        <?php endif; ?>
      </div>

      <div class="d-flex align-items-center">
        <label for="switch" class="open text-white px-3">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <label for="switch" class="back"></label>
      </div>

      <input id="switch" type="checkbox">
      <div id="menu">
        <div class="text-end p-2 d-md-none d-block">
          <label for="switch" class="close d-inline-block text-white p-2"><i class='bx bx-md bx-x'></i></label>
        </div>
        <ul>
          <li><a href="./">ホーム<small>Home</small></a></li>
          <li><a href="#service">サービス<small>Service</small></a></li>
          <li><a href="privacy.html">プライバシーポリシー<small>Privacy Policy</small></a></li>
          <li><a href="contact_form.html">お問い合わせ<small>Contact</small></a></li>
        </ul>

        <div class="d-md-none d-block mb-5">
          <?php
          require("sns_link.php");
          ?>
        </div>

      </div>

    </div>
  </nav>
</header>


<main class="contents">
