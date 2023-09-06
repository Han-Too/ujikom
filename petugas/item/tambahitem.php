<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 


?>
    
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <h5 class="card-title fw-semibold mb-4">Tambah Item</h5>
            </div>
        </div>
    <form action="../function.php" method="post">
        <label class="form-label" for="nama">Nama Item</label>
        <input class="form-control" type="hidden" name="id" >
        <input class="form-control"  id="nama" type="text" name="nama">
        <br>
        <label class="form-label" for="uom">UOM</label>
        <input class="form-control"  id="uom" type="text" name="uom">
        <br>
        <label class="form-label" for="hargabeli">Harga Beli</label>
        <input class="form-control"  id="hargabeli" type="number" name="hargabeli"><br>
        <label class="form-label" for="hargajual">Harga Jual</label>
        <input class="form-control"  id="hargajual" type="number" name="hargajual"><br>
        <br>
        <br><br>
        <input class="btn btn-success" name="tambahitem" type="submit" value="Tambah">
    </form>
    </div>
    </div>
</div>
</div>
    
    <?php include 'downer.php' ?>