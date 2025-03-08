<?php
class Pelanggan
{
    private $id_pelanggan, $nama, $email, $alamat;

    public function __construct()
    {
    }

    public function setData($id_pelanggan, $nama, $email, $alamat)
    {
        $this->id_pelanggan = $id_pelanggan;
        $this->nama = $nama;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    public function getData()
    {
        return [
            "id_pelanggan" => $this->id_pelanggan,
            "nama" => $this->nama,
            "email" => $this->email,
            "alamat" => $this->alamat,
        ];
    }
}
?>