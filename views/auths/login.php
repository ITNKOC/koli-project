<link rel="stylesheet"
    href="<?= URI."assets/front/fonts/fonts/material-icon/css/material-design-iconic-font.min.css"?>">

<!-- Main css -->
<link rel="stylesheet" href="<?= URI."assets/front/css/styleTemp.css"?>">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= URI."assets/front/img/images/signin-image.jpg"?>" alt="sing up image">
                        </figure>
                        <a href="<?=URI?>auths/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in" />
                            </div>
                            <?php
                            if (isset($message)) {
                                ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $message; ?>
                            </div>
                            <?php
                            }
                            ?>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= URI."assets/front/vendor/jquery/jquery.min.js"?>"></script>
    <script src="<?= URI."assets/front/js/js/main.js"?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>