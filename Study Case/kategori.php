<?php
class Kategori
{
    private $id_kategori, $nama_kategori;

    public function setData($id_kategori, $nama_kategori)
    {
        $this->id_kategori = $id_kategori;
        $this->nama_kategori = $nama_kategori;
    }

    public function getData()
    {
        return [
            "id_kategori" => $this->id_kategori,
            "nama_kategori" => $this->nama_kategori,
        ];
    }
}
?>