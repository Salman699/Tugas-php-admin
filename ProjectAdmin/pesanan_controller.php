<?php 


require_once __DIR__ . "/koneksi.php" ;
require_once __DIR__ . "/Model/Pesanan.php" ;

// step pertama yaitu menangkap reques form
$tanggal = $_POST["tanggal"];
$total = $_POST["total"];
$pelanggan_id = $_POST["pelanggan_id"];

$data = [
   $tanggal,
   $total,
   $pelanggan_id
];

$model = new Pesanan();
$tombol = $_REQUEST["proses"];

switch($tombol){
    case "simpan": $model->simpan($data); break;
    case "ubah": 
        $data[] = $_POST["idx"];
        $model->ubah($data); break;
    default:
   header("Location:index.php?url=pesanan");
    break;
}

header("Location:index.php?url=pesanan");

?>