<?php
session_start();
ob_start();
require_once "connect.php";

?>


<!doctype html>
<html lang="eng">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>books_store</title>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="fonts/icons/font-awesome/css/font-awesome.min.css">
</head>

<body>

    <?php if(isset($_GET['exit'])){
        unset($_SESSION['user']);
    } ?>
    
    <?php if(isset($_SESSION['user']) && isset($_SESSION['user-status']) && $_SESSION['user-status'] == "admin"): ?>
    <?php 
        include 'admin/admin-panel.php';
        if($_GET['page'] == "languages"){
            include 'admin/parts/editLanguages.php';
        }else{}
    ?>
    <?php else: 
        
    include 'parts/header.php';
    
    
    if(isset($_GET['login'])){
        require 'scripts/auth/auth.php';
        include 'parts/login.php';
    }
    if(isset($_GET['cart'])){
        include 'parts/cart.php';
    }
    
    
    if(isset($_GET['registration'])){
        require_once 'scripts/reg/reg.php';
        include 'parts/registr.php'; 
    }


    if(isset($_GET['categories'])){
        if($_GET['categories'] == 'crime'){
            include 'parts/all-products.php';
        }elseif($_GET['categories'] == 'novels'){
            include 'parts/all-products.php';
        }
    }else{
        include 'parts/best-sellers-carousel.php';
    }

    include 'parts/footer.php';
       
    ?>
    <?php endif; ?>

    

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/price_rangs.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>