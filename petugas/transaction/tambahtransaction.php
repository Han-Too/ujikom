<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 

$x = mysqli_query($koneksi,"SELECT * FROM mfn_item");

?>
    <?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                    <h5 class="card-title fw-semibold mb-4">Tambah Transaction</h5>
                    </div>
                </div>
                <form action="../function.php" method="post">
                    <label class="form-label" for="id_item">Nama Item</label>
                    <select class="form-select" name="id_item" id="id_item">
                        <?php 
                        foreach($x as $d){ 
                        ?>
                    <option value="<?=$d["id_item"]?>"><?=$d["nama_item"]?></option>
                        <?php } ?>
                    </select>
                <br>
                    <label class="form-label" for="quantity">Quantity</label>
                    <input class="form-control" id="quantity" type="number" name="quantity">
                <br>
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" id="price" type="number" name="price"><br>
                <br>
                <br>
                <br>
                    <input class="btn btn-success" name="tambahtransaction" type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>
    
    <?php include 'downer.php' ?>