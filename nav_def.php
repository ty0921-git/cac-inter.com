<header>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <div class="logo-head">
        <?php
        if ($logo = imageCheck("image", "logo-dark", false)) :
        ?>
          <h1 class="fs06 mb-1" style="white-space:nowrap;"><?= $site_catch ?><?= $site_name ?></h1>
          <a href="./"><img src="<?= $logo ?>" class="img-fluid" alt="<?= $site_catch ?> <?= $site_name ?>"></a>
        <?php else : ?>
          <h1 class="fs06 mb-1"><?= $site_catch ?></h1>
          <a class="navbar-brand" href="./"><?= $site_name ?></a>
        <?php endif; ?>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.html">Team</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contents
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Content</a></li>
              <li><a class="dropdown-item" href="#">Content</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Content</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog_list.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="item_list.html">Item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="archive_list.html">Archive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="spot_list.html">Spot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="staff_list.html">Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart01.html">Cart</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>
</header>


<main class="contents">
