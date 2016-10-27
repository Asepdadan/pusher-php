<?php 

class laptop{

	public $merk = "Lenovo Amd A8";
	public $harga = 5400000;
	public $milik = "Asep Dadan";

	public function __construct(){
		echo "ini construct ddari laptop";
	}

	public function __destruct(){
		echo "destruct dari laptop";
	}

	function hidupkan(){
		echo "laptop di hidupkan <h2>".$this->merk."</h2>";
	}

	public function matikan(){
		echo "laptop di matikan <h2>".$this->merk."</h2>";	
	}

	function proses(){
		$hidup = $this->hidupkan();
		$mati = $this->matikan();
		$proses = $hidup." ".$mati;
		return $proses;
	}

	

}

class komputer extends laptop{
	public $merk = "Asus Amd A8";

	public function __construct(){
		parent::__construct();
		echo "ini construct ddari komputer";
	}

	public function __destruct(){
		parent::__destruct();
		echo "destruct dari laptop";
	}

	function hidupkan(){
		echo "komputer di hidupkan <h2>".$this->merk."</h2>";	
	}

	function matikan(){
		echo "laptop di matikan <h2>".$this->merk."</h2>";	
	}

	public function proses(){
		//parent::matikan();
		return parent::$merk;
	}

	

}

class chromebook extends komputer{
 public function __construct() {
     parent::__construct();
     echo "Constructor dari class chromebook <br />";
   }
  
   public function __destruct() {
     echo "Destructor dari class chromebook <br />";
     parent::__destruct();
   }
}


$laptop_new = new chromebook();
echo "<br>";
echo "asep belajar oop";
//$komputer_new = new komputer();

//$laptop_new->merk = "Asus";

//$laptop_new->proses();

//$komputer_new->merk = "Toshiba";
//$komputer_new->proses();

//$komputer_new->proses();




?>