<?PHP
class Commande{
	private $idc;
	private $nom;
	private $prenom;
	private $num;
	private $email;
	private $nomP;
	private $idp;
	function __construct($idc,$nom,$prenom,$num,$email,$nomP,$idp){
		$this->idc=$idc;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->num=$num;
		$this->email=$email;
		$this->nomP=$nomP;
		$this->idp=$idp;
	}
	function getEmail(){
		return $this->email;
	}
	function getIdc(){
		return $this->idc;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNum(){
		return $this->num;
	}
	function getNomP(){
			return $this->nomP;
	}
    function getIdproduit(){
		return $this->idp;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNum($num){
		$this->num=$num;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setNomp($nomp){
		$this->nomP=$nomp;
	}
	function setIdc($idc){
		$this->idc=$idc;
	}
	function setIdp($idp){
		$this->idp=$idp;
	}

}
?>