<?php 

class Produk {
    public $judul,  
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Si Juki Anak Kosan #1", "Faza Meonko", "Falcon Publishing", 66600 );
$produk2 = new Produk("FC24", "Electronic Arts", "EA Sports", 239000 );
$produk3 = new Produk("Naruto");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

var_dump($produk3);

?>