<section class="breadcrumb_part single_product_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">

                    <?php
                        $product_id[0]["img"] = str_replace('../', '', $product_id[0]["img"]);
                    ?>
                    <div class="single_product_img">
                        <img src=" <?= $product_id[0]['img'] ?> " alt="#" class="img-fluid">
                    </div>
                    <!-- <div class="single_product_img">
                        <img src="public/img/product/single_product.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="public/img/product/single_product.png" alt="#" class="img-fluid">
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>
                        <?= $product_id[0]['tensp'] ?>
                    </h3>
                    <p>
                        Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                        sources. Credibly innovate granular internal or “organic” sources whereas high standards in
                        web-readiness. Credibly innovate granular internal or organic sources whereas high standards in
                        web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful
                        experiences. Dramatically synthesize integrated schemas. with optimal networks.
                    </p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p>$5</p>
                        </div>
                        <div class="add_to_cart">
                            <a href="#" class="btn_3">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Get promotions & updates!</h2>
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                        sources credibly innovate granular internal .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="Enter your mail">
                        <a href="#" class="btn_1">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>