<?php 

class Produk{
  public $judul,//Property
        $penulis,
        $penerbit,
        $harga;

        public function __construct($judul,$penulis,$penerbit,$harga){
          $this ->judul = $judul;
          $this ->penulis = $penulis;
          $this ->penerbit = $penerbit;
          $this ->harga = $harga;
        }

        public function getLabel(){//Function/method
            return 
            "$this->penulis,
            $this->penerbit";
        }
}

class CetakInfoTerbaru{
    public function cetak(Produk $produk){
    $str = "{$produk-> judul} | {$produk ->getLabel()}(Rp. {$produk-> harga})";
return $str;
        }
    }


$produk1 = new Produk("Narutu","Masahi","Shonen jump","30000");//objek 
$produk2 = new produk("Atomic Habbit","james clear","indonesia",40000);


echo "komik :". $produk1-> penulis, $produk1 -> penerbit;
echo "<br>";
echo "Buku ". $produk2->getLabel();
$infoProduk1 = new CetakInfoTerbaru();
echo $infoProduk1->cetak($produk1);
 ?>