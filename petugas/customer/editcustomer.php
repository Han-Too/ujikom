<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$id = $_GET["id"];
$tabel = mysqli_query($koneksi, "select * from mfn_customer where id_customer = '$id'");
foreach ($tabel as $d) {

    ?>
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
        <div class="d-flex justify-content-between">
            <div class="p-2">
            <h5 class="card-title fw-semibold mb-4">Edit Customer</h5>
            </div>
        </div>
     <form action="../function.php" method="post">
        <label class="form-label" for="nama">Nama Customer</label> <br>
        <input class="form-control" type="hidden" name="id" value="<?= $d["id_customer"] ?>">
        <input class="form-control" value="<?= $d["nama_customer"] ?>" id="nama" type="text" name="nama">
        <br>
        <label class="form-label" for="alamat">Alamat</label>
        <input class="form-control" value="<?= $d["alamat"] ?>" id="alamat" type="text" name="alamat"><br>
        <label class="form-label" for="telp">Telepon</label>
        <input class="form-control" value="<?= $d["telp"] ?>" id="telp" type="number" name="telp"><br>
        <label class="form-label" for="fax">Fax</label>
        <input class="form-control" value="<?= $d["fax"] ?>" id="fax" type="text" name="fax"><br>
        <label class="form-label" for="email">Email</label>
        <input class="form-control" value="<?= $d["email"] ?>" id="email" type="email" name="email"><br>
        <br><br>
        <input class="btn btn-success" name="editcustomer" type="submit" value="Ubah">
    </form>
                            </div>
                        </div>
                    </div>
</div>
    
    <?php include 'downer.php' ?>

<?php 
} ?>