<section class="overflow-hidden space" data-bg-src="assets/img/bg/pattern_bg_7.png" id="galery">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-4 col-lg-5">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title"><span class="line"></span><?php echo $lang['titlehome']; ?></span>
                    <h2 class="sec-title"><?php echo $lang['gal9']; ?></h2>
                </div>
            </div>
            <div class="col-xl-12 col-lg-5">
            <div class="title-area text-center text-lg-start">
                    <p class="sec-text" style="color: black;font-size:20px">
                        <?php echo $lang['gal7']; ?>
                    </p>
                    <p class="sec-text" style="color: black;font-size:20px">
                        <?php echo $lang['gal8']; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn mt-n3 mt-lg-0">
                    <div class="nav tab-menu1 indicator-active" id="tab-menu1" role="tablist">
                        <button class="tab-btn" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                            <?php echo $lang['galmodel1']; ?>
                        </button>
                        <button class="tab-btn" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                            <?php echo $lang['galmodel2']; ?>
                        </button>
                        <button class="tab-btn" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                            <?php echo $lang['galmodel3']; ?>
                        </button>
                        <button class="tab-btn" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                            <?php echo $lang['galmodel4']; ?>
                        </button>
                        <button class="tab-btn " id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                            <?php echo $lang['galmodel5']; ?>
                        </button>
                        <button class="tab-btn active" id="nav-6-tab" data-bs-toggle="tab" data-bs-target="#nav-6" type="button" role="tab" aria-controls="nav-6" aria-selected="false">
                            <?php echo $lang['galmodel6']; ?>
                        </button>
                        <button class="tab-btn" id="nav-7-tab" data-bs-toggle="tab" data-bs-target="#nav-7" type="button" role="tab" aria-controls="nav-7" aria-selected="false">
                            <?php echo $lang['galmodel7']; ?>
                        </button>
                        <button class="tab-btn" id="nav-8-tab" data-bs-toggle="tab" data-bs-target="#nav-8" type="button" role="tab" aria-controls="nav-8" aria-selected="false">
                            <?php echo $lang['galmodel8']; ?>
                        </button>
                        <button class="tab-btn" id="nav-9-tab" data-bs-toggle="tab" data-bs-target="#nav-9" type="button" role="tab" aria-controls="nav-9" aria-selected="false">
                            <?php echo $lang['galmodel13']; ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <?php
            // Array of image data for tab 1
            $imagesTab1 = [
                ["path" => "assets/img/galeri/rodadhamma/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img7.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img8.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/rodadhamma/img9.jpg", "alt" => "gallery image"],
            ];
            $imagesTab2 = [
                ["path" => "assets/img/galeri/daunbodhi/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img7.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img8.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img9.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/daunbodhi/img10.jpg", "alt" => "gallery image"],
            ];
            $imagesTab3 = [
                ["path" => "assets/img/galeri/bungateratai/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img7.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img8.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img9.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img10.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img11.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/bungateratai/img12.jpg", "alt" => "gallery image"],
            ];
            $imagesTab4 = [
                ["path" => "assets/img/galeri/gajaholing/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/gajaholing/img7.jpg", "alt" => "gallery image"],
            ];
            $imagesTab5 = [
                ["path" => "assets/img/galeri/parang/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/parang/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/parang/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/parang/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/parang/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/parang/img6.jpg", "alt" => "gallery image"],
            ];
            $imagesTab6 = [
                ["path" => "assets/img/galeri/kawung/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/kawung/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/kawung/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/kawung/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/kawung/img5.jpg", "alt" => "gallery image"],
            ];
            $imagesTab7 = [
                ["path" => "assets/img/galeri/naga/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/naga/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/naga/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/naga/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/naga/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/naga/img6.jpg", "alt" => "gallery image"],
            ];
            $imagesTab8 = [
                ["path" => "assets/img/galeri/liris/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/liris/img7.jpg", "alt" => "gallery image"],
            ];
            $imagesTab9 = [
                ["path" => "assets/img/galeri/custom/img1.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img2.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img3.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img4.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img5.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img6.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img7.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img8.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img9.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img10.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img11.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img12.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img13.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img14.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img15.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img16.jpg", "alt" => "gallery image"],
                ["path" => "assets/img/galeri/custom/img17.jpg", "alt" => "gallery image"],
            ];
            ?>
            <div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab1 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab2 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab3 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab4 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab5 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="nav-6" role="tabpanel" aria-labelledby="nav-6-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab6 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-7-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab7 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-8" role="tabpanel" aria-labelledby="nav-8-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab8 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-9" role="tabpanel" aria-labelledby="nav-9-tab">
                <div class="slider-area">
                    <div class="row gy-30 overlay-direction">
                        <?php foreach ($imagesTab9 as $image) : ?>
                            <div class="cat1 col-xl-3 col-md-6 filter-item">
                                <div class="gallery-card">
                                    <a class="box-img popup-image" href="<?= $image['path'] ?>">
                                        <img src="<?= $image['path'] ?>" alt="<?= $image['alt'] ?>" />
                                        <div class="box-content">
                                            <span class="box-btn"><i class="fal fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>