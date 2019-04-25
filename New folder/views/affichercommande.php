<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
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
						<a href="./index.html" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
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
					<li><a href="#">Home</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Jewelry
						<span class="new">New</span>
					</a></li>
					<li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->
	<?PHP
include "../core/commandeC.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();

//var_dump($listecommandes->fetchAll());
?>

	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div style="width:100%;"class="col">
					<form>
						<input style="width: 30%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;" type="text" id="nomp" onkeyup="Search()" placeholder="Search for names..">
					</form>
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table id="affichage">
							<thead>
								<tr>
									<th class="product-th">Id</th>
									<th class="product-th">Nom</th>
									<th class="product-th">Prenom</th>
									<th class="product-th">numéro</th>
									<th class="product-th">E-mail</th>
									<th class="product-th">Id du produit</th>
									<th class="product-th">Nom du produit</th>
									<th class="product-th">Modifier</th>
									<th class="product-th">Supprimer</th>
								</tr>
							</thead>
							<tbody>
								<?PHP
									foreach($listecommandes as $row){
									?>
								<tr>
									
									<td class="size-col"><h4><?PHP echo $row['idc']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['nom']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['prenom']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['num']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['email']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['idp']; ?></h4></td>
									<td class="size-col"><h4><?PHP echo $row['nomp']; ?></h4></td>
									<td>
										<form method="POST">
										<input class="btn btn-success" type="submit" name="modif" value="Modifier">
										<input type="hidden" value="<?PHP echo $row['idc']; ?>" name="idc">
										</form>
									</td>
									<td>
										<form method="POST" action="supprimercommande.php">
										<input class="btn btn-danger" type="submit" name="supprimer" value="supprimer">
										<input type="hidden" value="<?PHP echo $row['idc']; ?>" name="idc">
										</form>
									</td>
								</tr>
								<?PHP
										}
								?>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-5">

<form class="promo-code-forms" method="POST" action="ajoutcommande.php">


<label>Nom</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;" type="varchar" name="nom">


<br><label>Prénom</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="prenom">


<br><label>Numéro</label><input style="width: 50%;margin-left:10px;margin-top:20px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="num">

<br><label>E-mail</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="email">

<br><label>Nom du produit</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="nomp">

       <br><label>Id du produit</label><input style="width:50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="idp">
        
<br><a href="" class="site-btn"><input type="submit" class="site-btn" name="ajouter" value="ajouter"></a>

</form>
				
				</div>
				<?PHP
include "../entities/commande.php";
if(!isset($_POST['idc']))
{
		$idc="";
		$nom="";
		$prenom="";
		$num="";
		$email="";
		$nomp="";
		$idp="";
}
else{
	$commandeC=new commandeC();
    $result=$commandeC->recuperercommande($_POST['idc']);
	foreach($result as $row){
		$idc=$row['idc'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$num=$row['num'];
		$email=$row['email'];
		$nomp=$row['nomp'];
		$idp=$row['idp'];

?>
				<div class="col-lg-5">

<form class="promo-code-forms" method="POST" action="modifiercommande.php">


<label>Nom</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;" type="varchar" name="nom" value="<?PHP echo $nom ?>">


<br><label>Prénom</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="prenom" value="<?PHP echo $prenom ?>">


<br><label>Numéro</label><input style="width: 50%;margin-left:10px;margin-top:20px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="num" value="<?PHP echo $num ?>">

<br><label>E-mail</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="email" value="<?PHP echo $email ?>">

<br><label>Nom du produit</label><input style="width: 50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="nomp" value="<?PHP echo $nomp ?>">

       <br><label>Id du produit</label><input style="width:50%;margin-top:20px;margin-left:10px;height: 58px;border: 2px solid #f0f0f0;padding-left: 24px;padding-right: 100px;font-size: 16px;border-radius: 80px;"type="varchar" name="idp" value="<?PHP echo $idp ?>">
        
<br><a href="" class="site-btn"><input type="submit" class="site-btn" name="modifier" value="Enregistrer"></a>
	<input type="hidden" name="idc" value="<?PHP echo $idc ?>">

</form>
		<?PHP
	}
}
?>
		
				</div>
				</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->



	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
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
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
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
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
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
	<script>
function Search() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("nomp");
  filter = input.value.toUpperCase();
  table = document.getElementById("affichage");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
	</body>
</html>
