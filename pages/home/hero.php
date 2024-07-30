<div class="th-hero-wrapper hero-3 slider-area" id="hero" data-bg-src="assets/img/hero/hero_bg_3.png">
    <div class="swiper th-slider" id="heroSlide3" data-slider-options='{"effect":"fade","autoHeight":true}'>
        <div class="swiper-wrapper">
            <?php 
            $slides = [
                ["title" => $lang['titlehome'], "title1" => $lang['titlehome1'], "title2" => $lang['titlehome2'], "title3" => $lang['titlehome3'], "image" => "assets/img/header-batik/img-2.jpg"],
                ["title" => $lang['titlehome'], "title1" => $lang['titlehome1'], "title2" => $lang['titlehome2'], "title3" => $lang['titlehome3'], "image" => "assets/img/header-batik/img-5.jpg"],
                ["title" => $lang['titlehome'], "title1" => $lang['titlehome1'], "title2" => $lang['titlehome2'], "title3" => $lang['titlehome3'], "image" => "assets/img/header-batik/img-8.jpg"]
            ];

            foreach ($slides as $index => $slide): 
            ?>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style3">
                            <div class="hero-arrow" data-ani="slideinright" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero_arrow2.svg" alt="Arrow" />
                            </div>
                            <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s"><span class="line"></span><?php echo $slide['title']; ?></span>
                            <h1 class="hero-title">
                                <span class="title1" data-ani="slideinup" data-ani-delay="0.2s"><?php echo $slide['title1']; ?></span>
                                <span class="title2" data-ani="slideinup" data-ani-delay="0.4s"><span class="text-theme"><?php echo $slide['title2']; ?></span></span>
                                <span class="title3" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $slide['title3']; ?></span>
                            </h1>
                            <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.8s">
                                <a href="price.php" class="th-btn style4"><?php echo $lang['homeshop']; ?><i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-img" data-ani="slideinrighthero" data-ani-delay="0.2s">
                        <img src="<?php echo $slide['image']; ?>" alt="Image" />
                        <div class="box-badge">
                            <div class="spin-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" preserveAspectRatio="none" xml:space="preserve">
                                    <defs>
                                        <path id="circlePath-id<?php echo $index; ?>" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath-id<?php echo $index; ?>" fill="none" />
                                        <text fill="#101840">
                                            <textPath xlink:href="#circlePath-id<?php echo $index; ?>">
                                                <?php echo $slide['title']; ?>
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-pagination"></div>
    </div>
    <button data-slider-next="#heroSlide3" class="slider-arrow slider-next">
        <i class="far fa-arrow-right"></i>
    </button>
</div>
