<?php
include "Pelanggan.php";
include "Kategori.php";
include "Barang.php";
include "Pesanan.php";

$pelanggan_1 = new Pelanggan();
$pelanggan_1->setData("CUST01", "Chalida Abdat", "chalidabdat@gmail.com", "Jl. Gombel Indah, Kota Semarang.");

$pelanggan_2 = new Pelanggan();
$pelanggan_2->setData("CUST02", "Desvita Maharani", "ranimaha@yahoo.com", "Jl. Kebonharjo Selatan, Kota Semarang.");

$kategori_1 = new Kategori();
$kategori_1->setData("CAT01", "Mobil");

$barang_1 = new Barang();
$barang_2 = new Barang();
$barang_3 = new Barang();
$barang_4 = new Barang();
$barang_5 = new Barang();

$barang_1->setData("BRG01", "Mobil BMW", 2000000000, $kategori_1);
$barang_2->setData("BRG02", "Mobil Mini Cooper", 1500000000, $kategori_1);
$barang_3->setData("BRG03", "Mobil Range Rover", 3500000000, $kategori_1);
$barang_4->setData("BRG04", "Mobil Porche", 7000000000, $kategori_1);
$barang_5->setData("BRG05", "Mobil Ferrari", 18000000000, $kategori_1);

$daftar_barang = [
    $barang_1->getData(),
    $barang_2->getData(),
    $barang_3->getData(),
    $barang_4->getData(),
    $barang_5->getData(),
];

$pesanan_1 = new Pesanan("SHOPEE1", $pelanggan_1, [$daftar_barang[0], $daftar_barang[1], $daftar_barang[2]], 11000000, 80000000);
$pesanan_1->setStatus("Dikirim"); // utk status

$pesanan_2 = new Pesanan("SHOPEE2", $pelanggan_2, [$daftar_barang[3], $daftar_barang[4]], 80000000, 22000000);
$pesanan_2->setStatus("Selesai"); // utk status

// Cetak Data Pesanan
echo "<pre>";
echo "Pesanan 1 :\n";
print_r($pesanan_1->getData());

echo "\nPesanan 2 :\n";
print_r($pesanan_2->getData());
echo "</pre>";
?>