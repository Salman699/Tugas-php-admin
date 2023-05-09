<?php 


require_once __DIR__ . "/koneksi.php" ;
require_once __DIR__ . "/Model/Pelanggan.php" ;

// step pertama yaitu menangkap reques form
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jk"];
$tempat_lahir = $_POST["tmp_lahir"];
$tanggal_lahir = $_POST["tgl_lahir"];
$email = $_POST["email"];
$kartu_id = $_POST["kartu_id"];

$data = [
   $kode,
   $nama,
   $jenis_kelamin,
   $tempat_lahir,
   $tanggal_lahir,
   $email,
   $kartu_id
];

$model = new Pelanggan();
$tombol = $_REQUEST["proses"];

switch($tombol){
    case "simpan": $model->simpan($data); break;
    case "ubah": 
        $data[] = $_POST["idx"];
        $model->ubah($data); break;
    default:
   header("Location:index.php?url=pelanggan");
    break;
}

header("Location:index.php?url=pelanggan");

?>