<?php
class Pesanan
{
    private $id_pesanan, $pelanggan, $daftar_barang, $total_harga = 0, $diskon = 0, $pajak = 0, $status;

    private $status_valid = ['Diproses', 'Dikirim', 'Selesai', 'Dibatalkan'];

    public function __construct($id_pesanan, $pelanggan, $daftar_barang, $diskon = 0, $pajak = 0)
    {
        $this->id_pesanan = $id_pesanan;
        $this->pelanggan = $pelanggan;
        $this->daftar_barang = $daftar_barang;
        $this->diskon = $diskon;
        $this->pajak = $pajak;
        $this->hitungTotalHarga();
        $this->status = 'Diproses'; // defaultnys diproses
    }

    public function hitungTotalHarga()
    {
        // hitung subtotal
        $subtotal = 0;
        foreach ($this->daftar_barang as $barang) {
            $subtotal += $barang['harga'];
        }

        // hitung total setelah diskon n pajak
        $this->total_harga = $subtotal - $this->diskon + $this->pajak;
    }

    // utk mengubah status pemesanan
    public function setStatus($status)
    {
        if (in_array($status, $this->status_valid)) {
            $this->status = $status;
        } else {
            throw new Exception("Status dinyatakan tidak valid. Pilih antara: " . implode(", ", $this->status_valid));
        }
    }

    public function getData()
    {
        return [
            "id_pesanan" => $this->id_pesanan,
            "tanggal" => date("y-m-d"),
            "pelanggan" => $this->pelanggan->getData(),
            "daftar_barang" => $this->daftar_barang,
            "subtotal" => $this->total_harga + $this->diskon - $this->pajak, // enih harga total sebelum didiskon dan kena pajak
            "diskon" => $this->diskon,
            "pajak" => $this->pajak,
            "total_harga" => $this->total_harga,
            "status" => $this->status,
        ];
    }
}
?>