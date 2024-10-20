<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    


    
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}

class komik extends Produk{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, ){
        
    } 

    public function getInfoProduk(){
    $str = "komik : ".parent::getInfoProduk()." - {$this ->jmlHalaman} Halaman.";
    return $str;
}
}

class game extends Produk{
    public function getInfoProduk() {
    $str = "game : ".parent::getInfoProduk()." - {$this -> waktuMain}jam.";
    return $str;
}
}


$produk1 = new komik("Naruto","Masahi kishimoto","Shonen Jump",30000,100);
$produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();