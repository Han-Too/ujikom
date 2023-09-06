<?php
include '../koneksi.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$tabel = mysqli_query($koneksi, "select * from mfn_customer");


?>
<?php include 'upper.php' ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div class="p-2">
                        <h5 class="card-title fw-semibold mb-4">Data Customer</h5>
                    </div>
                    <div  class="p-2">
                        <a href="tambahcustomer.php" class=" text-success text-decoration-none">Tambah Data</button>
                    </div>
                </div>
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4 bg-success">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">ID Customer</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Nama Customer</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Alamat</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Telepon</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Fax</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold text-light text-center mb-0">Aksi</h6>
                            </th>
                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($tabel as $data) {
                                            ?>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-normal text-center mb-0"><?= $data["id_customer"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-normal text-center mb-0"><?= $data["nama_customer"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-normal text-center mb-0"><?= $data["alamat"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-normal text-center mb-1"><?= $data["telp"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="text-center mb-0 fw-normal"><?= $data["fax"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0 ">
                                                    <h6 class="text-center mb-0 fw-normal"><?= $data["email"] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="editcustomer.php?id=<?= $data["id_customer"] ?>" class="btn mx-2 btn-success">Ubah</a>
                                                        <a href="hapuscustomer.php?id=<?= $data["id_customer"] ?>" class="btn mx-2 btn-danger">Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>



<?php include 'downer.php' ?>