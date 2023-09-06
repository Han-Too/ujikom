<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$tabel = mysqli_query($koneksi, "select * from mfn_transaction");


?>
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h5 class="card-title fw-semibold mb-4">Data Item</h5>
                    </div>
                    <div  class="p-2">
                    <a href="tambahtransaction.php" class=" text-success text-decoration-none">Tambah Data</button>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4 bg-success">
                        <tr>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    ID </h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    ID Item </h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    Quantity </h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    Price </h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    Amount </h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold text-light text-center mb-0">    Aksi </h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tabel as $data) {
                        ?>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal text-center mb-0">
                                <?= $data["id_transaction"] ?>
                            </h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal text-center mb-0">
                                <?= $data["id_item"] ?>
                            </h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal text-center mb-0">
                                <?= $data["quantity"] ?>
                            </h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal text-center mb-0">
                                <?= $data["price"] ?>
                            </h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal text-center mb-0">
                                <?= $data["amount"] ?>
                            </h6>
                        </td>
                        <td class="border-bottom-0 text-center">
                            <a class="btn mx-2 btn-success" href="edittransaction.php?id=<?= $data["id_transaction"] ?>">ubah</a>
                            <a class="btn mx-2 btn-danger" href="hapustransaction.php?id=<?= $data["id_transaction"] ?>">hapus</a>
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