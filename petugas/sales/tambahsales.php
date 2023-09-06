<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 

$data = mysqli_query($koneksi,"SELECT * FROM mfn_customer");

?>    
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h5 class="card-title fw-semibold mb-4">Tambah Sales</h5>
                </div>
            </div>
    <form action="../function.php" method="post">
        <label class="form-label" for="tgl">Tanggal Sales</label>
        <input class="form-control" id="tgl" type="date" name="tgl">
        <br>
        <label class="form-label" for="id_customer">Customer</label>
        <select class="form-select" name="id_customer" id="id_customer">
        <?php 
        foreach($data as $d){ 
            ?>
            <option value="<?=$d["id_customer"]?>"><?=$d["nama_customer"]?></option>
        <?php } ?>
        </select>
        <br>
        <label class="form-label" for="do_number">DO Number</label>
          <input class="form-control" id="do_number" type="text" name="do_number"><br>
        <label class="form-label" for="status">Status</label>
        <select class="form-select" name="status" id="status">
            <option value="1">
                Aktif
            </option>
            <option value="2">
                Nonaktif
            </option>
        </select>
        <br>
        <br><br>
          <input class="btn btn-success" name="tambahsales" type="submit" value="Tambah">
    </form>
            </div>
        </div>
    </div>
</div>
    
    <?php include 'downer.php' ?>