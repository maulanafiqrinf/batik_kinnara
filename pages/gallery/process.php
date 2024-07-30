<section class="space" id="process-sec" style="background-image: url('assets/img/bg/process_bg_2.jpg');">
    <div class="shape-mockup full-section" data-top="0%" data-right="0%" data-left="0%" style="position: absolute; top: 0; right: 0; left: 0; bottom: 0; width: 100%; height: 100%; z-index: -1; overflow: hidden;">
        <img src="assets/img/bg/bg-batik1.png" alt="shape" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8">
                <div class="title-area text-center">
                    <span class="sub-title2"><?php echo $lang['titlehome']; ?></span>
                    <h2 class="sec-title text-white"><?php echo $lang['caremodel']; ?></h2>
                </div>
            </div>
        </div>
        <div class="process-box-wrap">
            <?php
            $processSteps = [
                ["number" => "01", "title" => $lang['caremodel1'], "text" => $lang['subcaremodel1']],
                ["number" => "02", "title" => $lang['caremodel2'], "text" => $lang['subcaremodel2']],
                ["number" => "03", "title" => $lang['caremodel3'], "text" => $lang['subcaremodel3']],
                ["number" => "04", "title" => $lang['caremodel4'], "text" => $lang['subcaremodel4']]
            ];

            foreach ($processSteps as $step) :
            ?>
                <div class="process-box">
                    <div class="box-number"><?php echo $step['number']; ?></div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo $step['title']; ?></h3>
                        <p class="box-text"><?php echo $step['text']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>