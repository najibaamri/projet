<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["idc"])){
	$commandeC->supprimercommande($_POST["idc"]);
	header('Location: affichercommande.php');
}

?>