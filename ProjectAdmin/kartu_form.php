<?php 
require_once __DIR__ . "/Model/Kartu.php" ;

$model = new Kartu();
$kartu = $model->kartu();

?>

<br>
<form method="post" action="kartu_controller.php">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="text1" name="kode" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="text2" name="nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Diskon</label> 
        <div class="col-8">
          <input id="text3" name="diskon" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Iuran</label> 
        <div class="col-8">
          <input id="text4" name="iuran" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
        </div>
      </div>
    </form>