<section class="space" data-bg-src="assets/img/bg/bg-6.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><?php echo $lang['home']; ?></span>
            <h2 class="sec-title"><?php echo $lang['price1']; ?></h2>
            <p class="sec-text">
                <?php echo $lang['price2']; ?><br /><?php echo $lang['price3']; ?>
            </p>
        </div>
        <div class="row gy-4 tag-black">
            <?php 
            $priceCards = [
                ["title" => $lang['titleprice1'], "about" => $lang['aboutprice1'], "price" => $lang['pricebatik1']],
                ["title" => $lang['titleprice2'], "about" => $lang['aboutprice2'], "price" => $lang['pricebatik2']],
                ["title" => $lang['titleprice3'], "about" => $lang['aboutprice3'], "price" => $lang['pricebatik3']]
            ];

            foreach ($priceCards as $card): 
                $whatsappNumber = '6285234218387'; // Replace with your WhatsApp number in international format without '+' (e.g., 628123456789)
                $message = urlencode("Halo, saya ingin memesan produk berikut:" . $card['title'] . " ,Harga: " . $card['price'] . " ,Motif: " . "Bisakah Anda memberikan rincian lebih lanjut?");
                $whatsappLink = "https://wa.me/{$whatsappNumber}?text={$message}";
            ?>
            <div class="hover-item item-active col-xl-4 col-md-6">
                <div class="price-card">
                    <div class="box-shape">
                        <img src="assets/img/shape/lines_3.png" alt="shape" />
                    </div>
                    <span class="tag"><?php echo $lang['titlehome3']; ?></span>
                    <h3 class="box-title"><?php echo $card['title']; ?></h3>
                    <p class="sec-text" style="font-weight: bold;font-size:16px;">
                        <?php echo $card['about']; ?>
                    </p>
                    <p class="box-price">
                        <?php echo $lang['price']; ?>: <br/><span class="box-price"><?php echo $card['price']; ?></span>
                    </p>
                    <div class="box-footer">
                        <a href="<?php echo $whatsappLink; ?>" class="th-btn" target="_blank"><?php echo $lang['price4']; ?><i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
