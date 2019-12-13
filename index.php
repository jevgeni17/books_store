<?php
require_once "connect.php";
require_once "starter.php";
?>

<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Awesome</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  .langItem{
  	text-transform: uppercase;
  	font-size: 15px;
  	font-weight: 50;
  	margin-right: 20px;
  }
  </style>

  <style type="text/css">

/********************* Shopping Demo-4 **********************/
.product-grid4,.product-grid4 .product-image4{position:relative}
.product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
.product-grid4:hover{box-shadow:0 0 10px #16A085}
.product-grid4 .product-image4 a{display:block}
.product-grid4 .product-image4 img{width:100%;height:auto}
.product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
.product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
.product-grid4 .social li:nth-child(1){transition-delay:.15s}
.product-grid4 .social li:nth-child(2){transition-delay:.3s}
.product-grid4 .social li:nth-child(3){transition-delay:.45s}

.product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
.product-grid4 .social li a:hover{color:#fff;background:#16a085}
.product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
.product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
.product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}

.product-grid4 .product-content{padding:25px}
.product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid4 .title a{color:#222}
.product-grid4 .title a:hover{color:#16a085}
.product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .name{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .name span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
.product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
.product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}

</style>

</head>

<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<header>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="#"><?php include "languages.php" ?> <span class="sr-only">(current)</span></a>
     </li>
   </ul>
   <ul class="nav navbar-nav flex-row justify-content-between ml-auto" >

                   <li class="dropdown order-1">
                       <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                       <ul class="dropdown-menu dropdown-menu-right mt-2">
                          <li class="px-3 py-2">
                              <form class="form" role="form">
                                   <div class="form-group">
                                       <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="email" required="required">
                                   </div>
                                   <div class="form-group">
                                       <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="required">
                                   </div>
                                   <div class="form-group">
                                       <button type="submit" class="btn btn-primary btn-block">Login</button>
                                   </div>
                                   <div class="form-group text-center">
                                       <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small><br>
                                       <small><a href="#" data-toggle="modal" data-target="#modalPassword">Register now</a></small>
                                   </div>
                               </form>
                           </li>
                       </ul>
                   </li>
               </ul>
 </div>
</nav>

</header>
  <!-- Page Content -->
  <main role="main" class="container">
    <div class="row">
      <?php include "languages.php" ?>

			</div>

      <div class="container">

          <div class="row">
            				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>
        <div class="row">
        <?php

        $ln=$_GET['ln'];
        $articlesTable=mysqli_query($link, "SELECT * FROM articles WHERE lang='$ln' ORDER BY listOrder");
        while($oneArticle=mysqli_fetch_assoc($articlesTable)){

        	echo '<div class="col-md-3 col-sm-6" style="margin-top:20px;">
          <div class="product-grid4">
            <div class="product-image4">
            <a href="#">
                <img class="pic-1" src="img/'.$oneArticle['photo'].'">

            </a>
            <span class="product-new-label">New</span>
            </div>
            <div class="product-content">
                <h4 class="title"><a href="#">'.$oneArticle['title'].'</h4>
                <h3><div class="name">'.$oneArticle['lead'].'</div></h3>
                <h2><div class="price">'.$oneArticle['price'].'</div></h2>
                <a class="add-to-cart" href="#">'.$terms['readNext'].'</a>
            </div>
        </div>
    </div>';
        }
        ?>


  </main>

  <!-- Bootstrap core JavaScript -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script language="javascript" src="js/jquery-3.3.1.slim.min.js">
	</script>
	<script language="javascript" src="js/popper.min.js">
	</script>
	<script language="javascript" src="js/bootstrap.min.js">
	</script>


</body>

</html>
