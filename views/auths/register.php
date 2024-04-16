<!-- Font Icon -->
<link rel="stylesheet"
    href="<?= URI."assets/front/fonts/fonts/material-icon/css/material-design-iconic-font.min.css"?>">

<!-- Main css -->
<link rel="stylesheet" href="<?= URI."assets/front/css/styleTemp.css"?>">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="Nom" />
                            </div>
                            <div class="form-group">
                                <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="Prenom" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="telephone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="telephone" id="telephone" placeholder="Telephone" />
                            </div>
                            <div class="form-group">
                                <label for="dob"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="date_naissance" id="date_naissance"
                                    placeholder="Date de naissance" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Password" />
                            </div>

                            <?php 
                            ?>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="c_mot_de_passe" id="c_mot_de_passe"
                                    placeholder="Repeat your password" />
                            </div>
                            <?php 
                            if (isset($_POST['enregistre']) && $_POST['mot_de_passe'] != $_POST['c_mot_de_passe']){ 
                                echo "<p style='color: red;'>Les mots de passe ne correspondent pas.</p>";
                            }
                            ?>
                            <div class="form-group form-button">
                                <input type="submit" name="enregistre" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= URI."assets/front/img/images/signup-image.jpg"?>" alt="sing up image">
                        </figure>
                        <a href="<?=URI?>auths/login" class="signup-image-link">I am already member</a>

                    </div>
                </div>
            </div>
        </section>

        <!-- JS -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>