<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach($articles as $article) :?>
                <div class="breadcrumb__links">
                    <a href="<?=URI?>articles/index"><i class="fa fa-home"></i> Home</a>
                    <a href="<?=URI?>articles/shopFilterByCategory/<?=$article->id_categorie?>"><?= $article->nom_categorie?>
                    </a>
                    <span><?=  $article->nomArticle ?></span>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php foreach($articles as $article) :?>
            <div class="col-lg-6">
                <div class="product__details__pic">
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
                    <h5>Courte description : <br><br> <?= $article->courte_description; ?></h5><br>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Quantite : <?= $article->quantite; ?> en stock</span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="<?=URI?>paniers/ajouter/<?=$article->id_article?>" class="cart-btn"><span
                                class="icon_bag_alt"></span> Add to
                            cart</a>
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
                            <p><?= $article->description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
<!-- Instagram End -->