<?php
$koneksi = mysqli_connect('localhost', 'root', "", 'muhamadfarhannurananda');

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>