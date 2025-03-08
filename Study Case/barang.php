<?php
class Barang
{
    private $id_barang, $nama, $harga;

    public function setData($id_barang, $nama, $harga)
    {
        $this->id_barang = $id_barang;
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getData()
    {
        return [
            "id_barang" => $this->id_barang,
            "nama" => $this->nama,
            "harga" => $this->harga,
        ];
    }
}
?>