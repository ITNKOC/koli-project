<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">

                                    <?php foreach ($categories as $category) : ?>
                                    <div>
                                        <a href="<?=URI?>articles/shopFilterByCategory/<?=$category->id_categorie?>"
                                            style="color=black"><?=  $category->nom_categorie ?></a>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <?php foreach ($articles as $article) :?>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="<?= isset($article->chemin_image) ? URI . $article->chemin_image : URI . "assets/front/img/shop/shop-1.jpg" ?>">
                                <?php if ($article->statut === 'disponible') : ?>
                                <div class="label new">disponible</div>
                                <?php else: ?>
                                <div class="label stockout stockblue">Rupture</div>
                                <?php endif; ?>
                                <ul class="product__hover">
                                    <li><a href="<?= isset($article->chemin_image) ? URI . $article->chemin_image : URI . "assets/front/img/shop/shop-1.jpg" ?>"
                                            class="image-popup"><span class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="<?=URI?>paniers/ajouter/<?=$article->id_article?>"><span
                                                class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a
                                        href="<?=URI?>articles/productDetails/<?=$article->id_article?>"><?= $article->nomArticle; ?></a>
                                </h6>
                                <div class="product__price">$ <?= floatval($article->prix); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="col-lg-12 text-center">
                <div class="pagination__option">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Shop Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-1.jpg" ?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-2.jpg" ?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-3.jpg" ?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-4.jpg" ?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-5.jpg" ?>">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= URI."assets/front/img/instagram/insta-6.jpg" ?>">
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