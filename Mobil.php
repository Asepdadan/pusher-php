<?php

class Mobil{

public $merk="Honda jazz";
public static $harga = 300000000;

public static $milik;


	public static function beli_mobil(){
	echo"beli mobil ".self::$milik;//ngambil dari properti static milik di atas dengan syarat memakai self::
	echo "<br>";
	echo self::$harga;
	}

	public function jual_mobil(){
		return $this->merk;

	}

}
$mobil = new mobil;
Mobil::$milik = "asep dadan";
//Mobil::$harga = 300000;

echo "mobil " . $mobil->merk ." pemiliknya adalah ".Mobil::$milik;
echo "<br>";
echo Mobil::beli_mobil();
echo "<br>";



echo $mobil->jual_mobil();

?>