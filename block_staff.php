<section class="container mb-5 panel">
    <h2 class="heading mb-3"><span>Staff</span> <small>スタッフ</small><a href="staff_list.html">スタッフ一覧</a></h2>
    <div>
        <div class="multiple-items">
            <?php
            $rows = get_rows("staff", null, "order by rand()");
            ?>
            <?php foreach ($rows as $row) : $code = zerop($row['code'], 7); ?>
                <div class="text-center">
                    <a href="staff_detail_<?= $code ?>.html" class="thumb02 mx-2" style="background-image:url(<?= imageCheck("staff", "{$code}_sm_01", false) ?>)"></a>
                    <div><small><?= $row['staff_position'] ?></small></div>
                    <div><a href="staff_detail_<?= $code ?>.html"><?= $row['staff_name'] ?></a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    $('.multiple-items').slick({
        infinite: true,
        autoplay: true,
        centerPadding: '5%',
        slidesToShow: 6,
        slidesToScroll: 3,
        arrows: false,
        useTransform: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }]
    });
</script>