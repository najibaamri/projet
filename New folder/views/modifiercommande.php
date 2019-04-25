
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

	$commandeC = new commandeC();
	$commande=new commande($_POST['idc'],$_POST['nom'],$_POST['prenom'],$_POST['num'],$_POST['email'],$_POST['nomp'],$_POST['idp']);
	$commandeC->modifiercommande($commande,$_POST['idc']);
	header('Location:affichercommande.php');

?>