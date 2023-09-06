<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 
    $id = $_GET["id"];
    $x =  mysqli_query($koneksi,"select * from mfn_item");
    $tabel =  mysqli_query($koneksi,"select * from mfn_transaction where id_transaction = '$id'");
    foreach($tabel as $d){

?>

    <?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                    <h5 class="card-title fw-semibold mb-4">Edit Transaction</h5>
                </div>
            </div>
            <form action="../function.php" method="post">
                <label class="form-label" for="id_item">Nama Item</label>
                <select class="form-select" name="id_item" id="id_item">
                    <?php 
                    foreach($x as $x){ 
                        ?>
                    <option <?php if($x["id_item"] == $d["id_item"]) echo "selected" ?> value="<?=$x["id_item"]?>"> 
                        <?=$x["nama_item"]?>
                    </option>
                        <?php } ?>
                </select>
            <br>
                <label class="form-label" for="quantity">Quantity</label>
                <input class="form-control" value="<?= $d["id_transaction"] ?>"  type="hidden" name="id">
                <input class="form-control" value="<?= $d["quantity"] ?>" id="quantity" type="number" name="quantity">
            <br>
                <label class="form-label" for="price">Price</label>
                <input class="form-control" value="<?= $d["price"] ?>" id="price" type="number" name="price"><br>
            <br>
            <br>
                <input class="btn btn-success" name="edittransaction" type="submit" value="Ubah">
            </form>
        </div>
    </div>
  </div>
</div>
    
    <?php include 'downer.php' ?>
<?php } ?>