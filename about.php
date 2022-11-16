<?php
require("head.php");
?>
<title>会社概要 | <?= h($site_catch) ?> <?= h($site_name) ?></title>
</head>

<body>
    <?php
    require("nav.php");
    ?>
    <section class="p-2 p-md-4"></section>



    <section class="container mb-4 mb-md-5">
        <h2 class="heading"><span>About us</span> <small>会社概要</small></h2>
    </section>


    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-base">
                    <?php if ($site_name) : ?>
                        <tr>
                            <th>サイト名</th>
                            <td><?= $site_name ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($site_url) : ?>
                        <tr>
                            <th>サイトURL</th>
                            <td><?= $site_url ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_name) : ?>
                        <tr>
                            <th>商号</th>
                            <td><?= $com_name ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_boss) : ?>
                        <tr>
                            <th>代表者</th>
                            <td><?= $com_boss ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_add) : ?>
                        <tr>
                            <th>所在地</th>
                            <td><?php if ($com_zip) : ?>〒<?= $com_zip ?> <?php endif; ?><?= $com_add ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_tel) : ?>
                        <tr>
                            <th>TEL</th>
                            <td><a href="tel:<?= $com_tel ?>"><?= $com_tel ?></a></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_fax) : ?>
                        <tr>
                            <th>FAX</th>
                            <td><?= $com_fax ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_free_dial) : ?>
                        <tr>
                            <th>フリーダイヤル</th>
                            <td><a href="tel:<?= $com_free_dial ?>"><?= $com_free_dial ?></a></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_hour) : ?>
                        <tr>
                            <th>営業時間</th>
                            <td><?= $com_hour ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_cap) : ?>
                        <tr>
                            <th>資本金</th>
                            <td><?= $com_cap ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_emp) : ?>
                        <tr>
                            <th>従業員数</th>
                            <td><?= $com_emp ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($main_bank) : ?>
                        <tr>
                            <th>取引先金融機関</th>
                            <td><?= nl2br($main_bank) ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_license) : ?>
                        <tr>
                            <th>免許・許可</th>
                            <td><?= $com_license ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($com_affiliation) : ?>
                        <tr>
                            <th>取引先</th>
                            <td><?= nl2br($com_affiliation) ?></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </section>



    <section class="container mb-5">
        <h2 class="heading"><span>Access</span> <small>アクセス</small></h2>
    </section>


    <section class="container mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.7139836745062!2d139.68515285682423!3d35.71569193568804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2b3d3f46ba7%3A0x425a9c6e860e097b!2z44CSMTYxLTAwMzUg5p2x5Lqs6YO95paw5a6_5Yy65Lit5LqV77yR5LiB55uu77yR4oiS77yZ!5e0!3m2!1sja!2sjp!4v1668417658017!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <?php
    require("foot.php");
    ?>
