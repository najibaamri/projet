<?PHP
include "livreurC.php";
$Livreur1C=new livreurC();
$listeLivreurs=$Livreur1C->afficherLivreurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>C</td>
<td>Nom</td>
<td>Prenom</td>
<td>nb heures</td>
<td>tarif horaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeLivreurs as $row){
	?>
	<
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['vehicule']; ?></td>
		<td><?PHP echo $row['$daten']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierLivreur.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
	
}
?>
</table>

