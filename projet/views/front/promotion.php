<?PHP
include "../../config.php";
include "../../core/promoC.php";
$promo1C=new PromoC();
$listePromos=$promo1C->afficherPromos1();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Wapi</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Rechercher dans Wapi ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
<li><i class="flaticon-profile" aria-hidden="true"></i><a href="login.php">Login</a></li>
                    <li><i class="flaticon-profile" aria-hidden="true"></i><a href="register.php">Register</a>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
							</div>
							<div class="up-item">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Acceuil</a></li>
					<li><a href="#">Catalogue
						<span class="new">New</span>
					</a></li>
					<li><a href="evenement.php">Evenements</a></li>
					<li><a href="#">Livraison
					</a></li>
			
				
					<li><a href="#">Service après vente</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Promotions</h4>
			<div class="site-pagination">
				<a href="#">Acceuil</a> /
				<a href="">Evenements</a> /

			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">


					
			
					<!--<div class="filter-widget mb-0">
						<h2 class="fw-title">Taille</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div>-->

				<div class="container">

					<div class="row">
						<?PHP

			foreach($listePromos as $row){
  					?>
						<div class="col-lg-4 col-sm-6">
				
							<div class="product-item">
				
  
								<div class="pi-pic">

									<div class="tag-sale">SOLDE</div>
									<a id="h" href="#"><?php
      $res="select produit.image, produit.prix from produit,promotion where produit.prix = promotion.prixAncien ";
    $db = config::getConnexion();
        $data=$db->query($res);

  # code...
           foreach($data as $rou){
              
            if ($row['prixAncien'] == $rou['prix']) {
                          
          $s=$rou['image'] ;
}

}
    ?>
    <img src="<?php echo 'img/'.$s ; ?>"></a>

									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>AJOUTER AU PANIER</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
										<a href="#" class="wishlist-btn"><?PHP echo $row['pourcentage']." %"; ?></a>
									</div>
																	</div>
								<div class="pi-text">
									<h6>   <?php
    									$a=$row['prixAncien'] - (($row['pourcentage'] * $row['prixAncien'])/100);
    									 echo $a." DT";
    										  ?></h6>
									<p><strike> <?PHP echo $row['prixAncien']." DT"; ?></strike></p>
		
									<p> <?PHP echo "de ".$row['dateDebut']; ?> à
  										<?PHP echo $row['dateFin']; ?> </p>
								</div>
							</div>
						</div>
				
					  <?PHP
}
?>
					<?php


?>
			
				

			
					
					
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">VOIR PLUS</button>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!-- Category section end -->




	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>A PROPOS</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Voir Plus</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Voir Plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>COORDONNEES</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Wapi </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>: Hamza Ibn Abd El Motalleb Ariana Ezzoghra </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+216 54 168 811</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>islemoueslati6@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>



				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Valhala</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>



		</div>



	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
