<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $cmd = 1; 
                                foreach($articles as $article) :
                                    $quantite = $article[0];
                                    $article = $article[1];
                                    $subtotal = 0;
                                    $tps = 0;
                                    $tvq = 0;
                                    $total = 0;
                                    $subtotal += $article->prix * $quantite;
                                    $tps = $subtotal * 0.05;
                                    $tvq = $subtotal * 0.09975;
                                    $total = $subtotal + $tps + $tvq;
                                    $montant_formatte = number_format($total, 2, '.', '');
                                ?>
                            <form method="post" action=<?= URI . "paniers/modifier/" . $article->id_article; ?>>
                                
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="<?=URI.$article->chemin_image?>" alt="" width="70px" height="70px">
                                        <div class="cart__product__item__title">
                                            <h6><?=  $article->nomArticle ?></h6>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?=  $article->prix ?> $</td>

                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input name="quantite" type="number" value=<?= $quantite; ?> name="quantite"
                                                min="0" max="<?= $article->quantite; ?>">
                                        </div>
                                    </td>
                                    <td class="cart__total"><?= ($article->prix)*$quantite?> $</td>
                                    <td>
                                        <a href="<?=URI?>paniers/supprimer/<?=$article->id_article?>">
                                            <button type="Button" class="btn btn-danger"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                </svg></button>
                                        </a>
                                    </td>
                                    <td>

                                        <button type="submit" class="btn btn-secondary"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                            </svg></button>

                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="<?=URI?>articles/shop">Continue Shopping</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn update__btn">
                    <a href="#"><span class="icon_loading"></span> Update cart</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php
            if(isset($_SESSION['utilisateur'])) {
            ?>
                <div id="paypal-button-container"></div>
                <?php
            }
            ?>

                <script
                    src="https://www.paypal.com/sdk/js?client-id=AWPH_Lod75Xn1SZC5DhqsVSj7JCLAWk3ye5Q3gmTE2gxQ-sFAQhozdT9KUcFqA97D_SVOechGk4C0Xnn&components=buttons">
                </script>
                <script>
                paypal.Buttons({
                    // Sets up the transaction when a payment button is clicked
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '<?= $montant_formatte ?>',
                                }
                            }]
                        });
                    },
                    // Finalize the transaction after payer approval
                    onApprove: async (data, actions) => {
                        // faire la redirection en javascript

                        request.url = "<?= URI . "commandes / commander"; ?>";

                        const order = await actions.order.capture();
                        console.log(order);
                        alert('Transaction completed by ' + order.payer.name.given_name);
                    }

                }).render('#paypal-button-container'); // The PayPal.js library will load automatically for us 
                </script>
            </div>
            <p id="payment-message"></p>
            <div class="col-lg-4 offset-lg-2">
                <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul>
                    
                        <li>Subtotal :<span><?=  number_format($subtotal, 2) ?> $</span></li>
                        <li>tps : <span><?=  number_format($tps, 2) ?> $</span></li>
                        <li>tvq :<span><?=  number_format($tvq, 2) ?> $</span></li>
                        <li>Total :<span id="total"><?=  number_format($total, 2) ?> $</span></li>

                    
                    </ul>
                    <a href="<?=URI?>paniers/shopCart" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Cart Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?=URI?>assets/front/img/instagram/insta-6.jpg">
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