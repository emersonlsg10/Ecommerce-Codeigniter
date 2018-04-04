<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="<?php echo base_url("resources/site/img/h4-slide.png") ?>" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li><img src="<?php echo base_url("resources/site/img/h4-slide2.png") ?>" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li><img src="<?php echo base_url("resources/site/img/h4-slide3.png") ?>" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li><img src="<?php echo base_url("resources/site/img/h4-slide4.png") ?>" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>1 ano de garantia</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Frete grátis</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Pagamento seguro</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>Novos produtos</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Produtos</h2>
                    <div class="product-carousel">
                       <?php
                        foreach ($products as $value) {
                            echo "<div class='single-product'>";
                            echo "<div class='product-f-image'>";
                            echo "<img src='". base_url("resources/site/img/products/$value->idproduct.jpg")."' alt=''>";
                            echo "<div class='product-hover'>";
                            echo "<a href='#' class='add-to-cart-link'><i class='fa fa-shopping-cart'></i> Adicionar ao carrinho</a>";
                            echo "<a href='#' class='view-details-link'><i class='fa fa-link'></i> Ver detalhes</a>";
                            echo "</div>
                            .</div>";
                            echo "<h2><a href='#'>$value->desproduct</a></h2>";
                            echo "<div class='product-carousel-price'>";
                            echo " <ins>R$ $value->vlprice</ins><del></del>";
                            echo "</div> 
                        </div>";
                        }                 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="<?php echo base_url("resources/site/img/brand1.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand2.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand3.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand4.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand5.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand6.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand1.png") ?>" alt="">
                        <img src="<?php echo base_url("resources/site/img/brand2.png") ?>" alt="">                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->
