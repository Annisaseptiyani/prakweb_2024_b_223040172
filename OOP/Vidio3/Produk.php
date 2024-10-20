<?php 

class Produk__{
  public $judul = "judul",//Property
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

        public function getLabel(){//Function/method
            return 
            "$this->penulis,
            $this->penerbit";
        }
}

$produk1 = new Produk__();//objek 
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi kishimoto";
$produk1->harga = "30000";

$produk2 = new produk__();
$produk2 ->judul = "Harry potter";
$produk2 ->penulis = "Brian";
$produk2 ->harga = "25000";

echo "komik :". $produk1-> penulis, $produk1 -> penerbit;
echo "<br>";
echo $produk2->getLabel()
 ?>