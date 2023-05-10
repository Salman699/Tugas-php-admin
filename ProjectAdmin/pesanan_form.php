<?php 

require_once __DIR__ . "/Model/Pesanan.php" ;

$obj_produk = new Pesanan();
$data_produk = $obj_produk->pesanan();

?>

<br>
<form method="post" action="pesanan_controller.php">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
          <input id="text1" name="tanggal" type="date" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Total</label> 
        <div class="col-8">
          <input id="text2" name="total" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Pelanggan Id</label> 
        <div class="col-8">
          <input id="text3" name="pelanggan_id" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
        </div>
      </div>
    </form>