<?PHP
class livraison{
	private $id;
	private $destination;
	private $dated;
	private $datef;
	private $idclient;
    private $idarticle;

	function __construct($id,$destination,$dated,$datef,$idclient,$idarticle)
	{
		$this->id=$id;
		$this->destination=$destination;
		$this->dated=$dated;
		$this->datef=$datef;
		$this->idclient=$idclient;
		$this->idarticle=$idarticle;
	}
	function getid(){
		return $this->id;
	}
	
	function getdestination(){
		return $this->cin;
	}
	function getdated(){
		return $this->nom;
	}
	function getdatef(){
		return $this->prenom;
	}
	function getidclient(){
		return $this->vehicule;
	}
	function getidarticle(){
		return $this->daten;
	}

	
}

?>