<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['num']) and isset($_POST['email']) and isset($_POST['nomp']) and isset($_POST['idp'])){
$commande1=new Commande('',$_POST['nom'],$_POST['prenom'],$_POST['num'],$_POST['email'],$_POST['nomp'],$_POST['idp']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new CommandeC();
$commande1C->ajoutercommande($commande1);
header('Location:affichercommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>