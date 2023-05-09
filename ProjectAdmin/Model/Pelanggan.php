<?php 


class Pelanggan{
    public function dataPelanggan()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pelanggan ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPelanggan($id)
    {
       $koneksi = getConection();
       $sql = "SELECT * FROM pelanggan WHERE id = ?";
       $statement =  $koneksi->prepare($sql);
       $statement->execute([$id]);
       $sr = $statement->fetch();
       return $sr;
    }

    public function simpan($data)
    {
        $koneksi = getConection();
        $sql = "INSERT INTO 
        pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id)
        VALUES (?,?,?,?,?,?,?)";
        $statement = $koneksi->prepare($sql);
        $statement->execute($data);
    }

    public function ubah(){

    }
}




?>