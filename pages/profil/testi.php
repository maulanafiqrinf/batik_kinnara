<section class="overflow-hidden space" id="testi-sec" data-bg-src="assets/img/bg/kegiatan.jpg">
  <div class="container">
    <div class="title-area text-center">
      <span class="sub-title2" style="color: black;"><?php echo $lang['prof7']; ?></span>
      <h2 class="sec-title" style="color: black;" ><?php echo $lang['prof2']; ?></h2>
    </div>
    <div class="slider-wrap text-center">
      <div class="swiper th-slider has-shadow" id="testiSlider5" data-slider-options='{"paginationType":"fraction","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>
        <div class="swiper-wrapper">

          <?php 
          $testimonials = [
            $lang['prof8'], 
            $lang['prof9'], 
            $lang['prof10']
          ];
          foreach ($testimonials as $testimonial): 
          ?>
          <div class="swiper-slide">
            <div class="testi-grid style2">
              <div class="box-icon">
                <svg width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="70.5" y="70" width="70" height="70" rx="35" transform="rotate(180 70.5 70)" fill="var(--theme-color)" />
                  <path d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z" fill="white" />
                </svg>
              </div>
              <div class="box-review">
                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
              </div>
              <p class="box-text"><?php echo $testimonial; ?></p>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
        <div class="slider-pagination"></div>
      </div>
      <div class="slider-controller">
        <button data-slider-prev="#testiSlider5" class="slider-arrow default text-white slider-prev">
          <i class="far fa-arrow-left"></i>
        </button>
        <div class="slider-pagination white-color" data-slider-id="#testiSlider5"></div>
        <button data-slider-next="#testiSlider5" class="slider-arrow default text-white slider-next">
          <i class="far fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>
