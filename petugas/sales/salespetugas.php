<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
} 
    $tabel =  mysqli_query($koneksi,"select * from mfn_sales");


?>

<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
    <div class="d-flex justify-content-between">
        <div class="p-2">
            <h5 class="card-title fw-semibold mb-4">Data Sales</h5>
        </div>
        <div  class="p-2">
            <a href="tambahsales.php" class=" text-success text-decoration-none">Tambah Data</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-nowrap mb-0 align-middle">>
        <thead class="text-dark fs-4 bg-success">
        <tr>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> ID </h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> Tanggal Sales </h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> ID Customer </h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> DO Number </h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> Status </h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold text-light text-center mb-0"> Aksi </h6>
            </th>
        </tr>
        </thead>
        <tbody>
            <?php 
            foreach($tabel as $data){
            ?>
        <tr>
            <td class="border-bottom-0">
                <h6 class="fw-normal text-center mb-0"><?=$data["id_sales"] ?></h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-normal text-center mb-0"><?=$data["tgl_sales"] ?></h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-normal text-center mb-0"><?=$data["id_customer"] ?></h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-normal text-center mb-0"><?=$data["do_number"] ?></h6></td>
            <td class="border-bottom-0 text-center">

            <?php if($data["status"] == 1 ){
                echo "Aktif";
            } else {
                echo "Nonaktif";
            } ?>
            </td>
            <td class="border-bottom-0 text-center">
                <a class="btn mx-2 btn-success" href="editsales.php?id=<?=$data["id_sales"]?>">ubah</a>
                <a class="btn mx-2 btn-danger" href="hapussales.php?id=<?=$data["id_sales"]?>">hapus</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
    </div>
   </div>
  </div>
</div>



<?php include 'downer.php' ?>