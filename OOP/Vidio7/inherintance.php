<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .=  " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }

}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class komik extends Produk{
public function getInfoProduk(){
    $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this ->jmlHalaman}Halaman.";
    return $str;
}
}

class game extends Produk{
    public function getInfoProduk() {
    $str = "game {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} - {$this -> waktuMain}jam.";
    return $str;
}
}


$produk1 = new komik("Naruto","Masahi kishimoto","Shonen Jump",30000,100);
$produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();