
<?PHP

include "../config.php";
class CommandeC {

	public function recuperercommande($id)
	{
		$sql="SElECT * From commande WHERE idc=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $c){
            die('Erreur: '.$c->getMessage());
        }	
	}
	
	function ajouterCommande($commande){
		$sql="insert into commande (idc,nom,prenom,email,nomp,num,idp) values ('', :nom,:prenom,:email,:nomp,:num,:idp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $num=$commande->getNum();
        $email=$commande->getEmail();
        $nomp=$commande->getNomp();
        $idp=$commande->getIdproduit();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':num',$num);
		$req->bindValue(':email',$email);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':idp',$idp);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $c){
            die('Erreur: '.$c->getMessage());
        }	
	}
	function supprimerCommande($idc){
		$sql="DELETE FROM commande where idc= :idc";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $c){
            die('Erreur: '.$c->getMessage());
        }
	}
	function modifierCommande($commande,$idp){
		$sql="UPDATE commande SET nom=:nom,prenom=:prenom,num=:num,email=:email,nomp=:nomp,idp=:idp WHERE idc=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idc=$commande->getIdc();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $num=$commande->getNum();
        $email=$commande->getEmail();
                $nomp=$commande->getNomp();
         		$idp=$commande->getIdproduit();
       

		$req->bindValue(':idc',$idc);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':num',$num);
		$req->bindValue(':email',$email);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':idp',$idp);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $c){
            echo " Erreur ! ".$c->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	}
?>

