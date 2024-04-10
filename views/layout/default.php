<header>
    <?php
   if(!$headerPerso){
    include ROOT . "views/layout/header.php";
   }else{
    include ROOT . "views/layout/headerAdmin.php";
   }
    ?>
</header>
<main class="container">
    <?= $content ?>
</main>
<footer>
    <?php
    if(!$headerPerso){
     include ROOT . 'views/layout/footer.php';
    }else{
        include ROOT . 'views/layout/footerAdmin.php';
    }
     ?>
</footer>