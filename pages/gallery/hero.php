<section class="space">
    <div class="shape-mockup full-section" data-top="0%" data-right="0%" data-left="0%" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; width: 100%; height: 100%; z-index: -1; overflow: hidden;">
        <img src="assets/img/bg/bg-6.png" alt="shape" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title"><?php echo $lang['titlehome']; ?></span>
            <h2 class="sec-title"><?php echo $lang['gal1']; ?></h2>
            <p class="sec-text" style="color: black;text-align:center;font-size:20px">
                <?php echo $lang['gal2']; ?><br />1.<?php echo $lang['gal3']; ?><br />2.<?php echo $lang['gal4']; ?><br />3.<?php echo $lang['gal5']; ?>
            </p>
        </div>
        <div class="row gy-30">
            <?php
            $galleryItems = [
                ["img" => "img-1.jpg", "title" => $lang['galmodel1'], "designation" => $lang['titlehome']],
                ["img" => "img-2.jpg", "title" => $lang['galmodel2'], "designation" => $lang['titlehome']],
                ["img" => "img-3.jpg", "title" => $lang['galmodel3'], "designation" => $lang['titlehome']],
                ["img" => "img-4.jpg", "title" => $lang['galmodel4'], "designation" => $lang['titlehome']],
                ["img" => "img-5.jpg", "title" => $lang['galmodel5'], "designation" => $lang['titlehome']],
                ["img" => "img-6.jpg", "title" => $lang['galmodel6'], "designation" => $lang['titlehome']],
                ["img" => "img-7.jpg", "title" => $lang['galmodel7'], "designation" => $lang['titlehome']],
                ["img" => "img-8.jpg", "title" => $lang['galmodel8'], "designation" => $lang['titlehome']],
                ["img" => "img-9.jpg", "title" => $lang['galmodel9'], "designation" => $lang['titlehome']],
                ["img" => "img-10.jpg", "title" => $lang['galmodel10'], "designation" => $lang['titlehome']],
                ["img" => "img-11.jpg", "title" => $lang['galmodel11'], "designation" => $lang['titlehome']],
                ["img" => "img-12.jpg", "title" => $lang['galmodel12'], "designation" => $lang['titlehome']],
            ];

            foreach ($galleryItems as $item) :
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="th-team team-card">
                        <div class="box-img">
                            <img src="assets/img/header-batik/<?php echo $item['img']; ?>" alt="Team">
                        </div>
                        <div class="box-content">
                            <br />
                            <h3 class="box-title"><?php echo $item['title']; ?></h3>
                            <p class="box-desig"><?php echo $item['designation']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>