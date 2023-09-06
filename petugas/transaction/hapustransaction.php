<?php
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$id = $_GET["id"];
$data = mysqli_query($koneksi, "DELETE FROM mfn_transaction WHERE id_transaction = '$id'");

if ($data) {
    echo "<script>alert('Yeeey Berhasil');window.location='transactionpetugas.php'</script>";
} else {
    echo "<script>alert('Yaahhh Gagal');window.location='transactionpetugas.php'</script>";
}

?>