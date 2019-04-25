<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
$commande=new commande(75757575,'BEN Ahmed','Salah',50,20);
$commanderC=new commandeC();
$commanderC->affichercommande($commande);
echo "****************";
echo "<br>";
echo "idc:".$commande->getIdc();
echo "<br>";
echo "nom:".$commande->getNom();
echo "<br>";
echo "prenom:".$commande->getPrenom();
echo "<br>";
echo "nbH:".$commande->getNum();
echo "<br>";
echo "tarif:".$commande->getEmail();
echo "<br>";
echo "tarif:".$commande->getNomp();
echo "<br>";
echo "tarif:".$commande->getIdp();
echo "<br>";
echo "le salaire est : ";
$commanderC->calculerSalaire($commande); 
echo "<br>";


?>