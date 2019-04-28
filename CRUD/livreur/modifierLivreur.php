<HTML>
<head>
</head>
<body>
<?PHP
session_start();
include "livreur.php";
include "livreurC.php";
$_SESSION['id'] = "12";
if (isset($_SESSION['id'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_SESSION['id']);
	foreach($result as $row){
		$id=$row['id'];
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$vehicule=$row['vehicule'];
		$daten=$row['daten'];
		}
}
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="text" name="vehicule" value="<?PHP echo $vehicule ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="daten" value="<?PHP echo $daten ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value=""></td>

</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['modifier'])){
	$livreur=new livreur($_SESSION['id'], $_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['vehicule'],$_POST['daten']);
	$livreurC->modifierLivreur($livreur);
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl>