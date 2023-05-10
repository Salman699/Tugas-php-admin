<?php 



class Kartu{
    public function kartu()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM kartu ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getKartu($id)
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM kartu WHERE id = ?";
        $ps = $koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $koneksi = getConection();
        $sql = "INSERT INTO 
        kartu(kode, nama, diskon, iuran)
        VALUES (?,?,?,?)";
        $statement = $koneksi->prepare($sql);
        $statement->execute($data);
    }

    public function ubah(){

    }

}
