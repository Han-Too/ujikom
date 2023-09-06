<?php
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$id = $_GET["id"];
$data = mysqli_query($koneksi, "DELETE FROM mfn_sales WHERE id_sales = '$id'");

if ($data) {
    echo "<script>alert('Yeeey Berhasil');window.location='salespetugas.php'</script>";
} else {
    echo "<script>alert('Yaahhh Gagal');window.location='salespetugas.php'</script>";
}

?>