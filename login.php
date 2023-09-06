<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from mfn_petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
$role = mysqli_fetch_array($login); 
if ($cek > 0) {
    if ($role["level"] == "1") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "<script>alert('Berhasil Login');window.location='manager/manager.php'</script>";
    } elseif ($role["level"] == "2") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "<script>alert('Berhasil Login');window.location='petugas/petugas.php'</script>";
    }
} else {
    echo "<script>alert('Gagal Login');window.location='index.php'</script>";
}

?>