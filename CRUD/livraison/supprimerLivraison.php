<?PHP
include "livraisonCC.php";
$livreurC=new LivreurC();
if (isset($_POST['id'])){
	$livreurC->supprimerLivraison($_POST["id"]);
	header('Location: afficherLivreur.php');
}

?>