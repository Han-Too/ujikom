<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 
    $id = $_GET["id"];
    $tabel =  mysqli_query($koneksi,"select * from mfn_sales where id_sales = '$id'");
    $data = mysqli_query($koneksi,"SELECT * FROM mfn_customer");
    foreach($tabel as $d){

?>
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
     <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                <h5 class="card-title fw-semibold mb-4">Edit Sales</h5>
            </div>
        </div>
    <form action="../function.php" method="post">
        <label  class="form-label" for="tgl">Tanggal Sales</label>
        <input class="form-control" type="hidden" name="id" value="<?= $d["id_sales"] ?>">
        <input class="form-control" value="<?=$d["tgl_sales"] ?>" id="tgl" type="date" name="tgl">
        <br>
        <label  class="form-label" for="alamat">Customer</label>
        <select class="form-select" name="id_customer" id="id_customer">
        <?php 
        foreach($data as $x){ 
            ?>
            <option <?php if($d["id_customer"] == $x["id_customer"]) echo "selected" ?> value="<?=$x["id_customer"]?>"><?=$x["nama_customer"]?></option>
        <?php } ?>
        </select>
        <br>
        <label  class="form-label" for="do_number">DO Number</label>
        <input class="form-control" id="do_number" value=<?= $d["do_number"] ?> type="text" name="do_number"><br>
        <label  class="form-label" for="status">Status</label>
        <select class="form-select" name="status" id="status">
            <option <?php if($d["status"] == "1") echo "selected" ?> value="1">
                Aktif
            </option>
            <option <?php if($d["status"] == "2") echo "selected" ?> value="2">
                Nonaktif
            </option>
        </select>
        <br><br>
        <input class="btn btn-success" name="editsales" type="submit" value="Ubah">
    </form>
    </div>
   </div>
  </div>
</div>
    
    <?php include 'downer.php' ?>
<?php } ?>