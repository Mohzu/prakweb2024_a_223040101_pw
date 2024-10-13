<?php 

require_once 'App/init.php';

$produk1 = new Komik("Si Juki Anak Kosan #1", "Faza Meonko", "Falcon Publishing", 66600, 100);
$produk2 = new Game("FC24", "Electronic Arts", "EA Sports", 239000, 50 );

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

?>