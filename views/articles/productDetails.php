<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="#">Women’s </a>
                    <span>Essential structured blazer</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php if ($articles) : ?>
            <?php foreach($articles as $article) :?>

            <div class="col-lg-6">
                <div class="product__details__pic">
                    <?= var_dump($article)?>
                    <div class="product__details__pic__left product__thumb nice-scroll">
                        <a class="pt active" href="#product-1">
                            <img src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                        </a>
                        <a class="pt" href="#product-2">
                            <img src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                        </a>
                        <a class="pt" href="#product-3">
                            <img src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                        </a>
                        <a class="pt" href="#product-4">
                            <img src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                        </a>
                    </div>
                    <div class="product__details__slider__content">
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-hash="product-1" class="product__big__img" src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                            <img data-hash="product-2" class="product__big__img" src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                            <img data-hash="product-3" class="product__big__img" src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                            <img data-hash="product-4" class="product__big__img" src="<?=(isset($article->chemin_image)) ?
                                                URI . $article->chemin_image :
                                                URI . "assets/image.svg"  ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3><?= $article->nomArticle; ?></h3>
                    <div class="product__details__price"><?= $article->prix; ?> $</div>
                    <p>Courte description : <?= $article->courte_description; ?></p><br>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Quantite : <?= $article->quantite; ?></span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                        <ul>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Availability : <?= $article->statut; ?></span>
                            </li><br>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Description :</h6>
                            <p><?= $article->description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>RELATED PRODUCTS</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?= URI."assets/front/img/product/related/rp-1.jpg"?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= URI."assets/front/img/product/related/rp-1.jpg"?>"
                                    class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Buttons tweed blazer</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?= URI."assets/front/img/product/related/rp-2.jpg"?>">
                        <ul class="product__hover">
                            <li><a href="<?= URI."assets/front/img/product/related/rp-2.jpg"?>"
                                    class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Flowy striped skirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 49.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?= URI."assets/front/img/product/related/rp-3.jpg"?>">
                        <div class="label stockout">out of stock</div>
                        <ul class="product__hover">
                            <li><a href="<?= URI."assets/front/img/product/related/rp-3.jpg"?>"
                                    class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Cotton T-Shirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?= URI."assets/front/img/product/related/rp-4.jpg"?>">
                        <ul class="product__hover">
                            <li><a href="<?= URI."assets/front/img/product/related/rp-4.jpg"?>"
                                    class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Slim striped pocket shirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-1.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-2.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-3.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-4.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-5.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-6.jpg"?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>