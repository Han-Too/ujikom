<?php 

$koneksi = mysqli_connect('localhost', 'root', "", 'muhamadfarhannurananda');

if (isset($_POST['tambahcustomer'])) {

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $fax = $_POST["fax"];
    $email = $_POST["email"];
    $tabel = mysqli_query($koneksi, "INSERT INTO mfn_customer VALUES('','$nama','$alamat','$telp','$fax','$email')");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='customer/customerpetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='customer/customerpetugas.php'</script>";
    }
}

if (isset($_POST["editcustomer"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $fax = $_POST["fax"];
    $email = $_POST["email"];

    $update = mysqli_query($koneksi, "UPDATE mfn_customer SET nama_customer='$nama', alamat='$alamat',telp='$telp',fax='$fax',email='$email' WHERE id_customer='$id'");

    if ($update) {
        echo "<script>alert('Yeeey Berhasil');window.location='customer/customerpetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='customer/customerpetugas.php'</script>";
    }
}

    ////////////////////////////////////////////////

if (isset($_POST['tambahsales'])) {
    $id = $_POST["id"];
    $tgl = $_POST["tgl"];
    $id_customer = $_POST["id_customer"];
    $do_number = $_POST["do_number"];
    $status = $_POST["status"];
    $tabel = mysqli_query($koneksi, "INSERT INTO mfn_sales VALUES('','$tgl','$id_customer','$do_number','$status')");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='sales/salespetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='sales/salespetugas.php'</script>";
    }
}

if (isset($_POST['editsales'])) {
    $id = $_POST["id"];
    $tgl = $_POST["tgl"];
    $id_customer = $_POST["id_customer"];
    $do_number = $_POST["do_number"];
    $status = $_POST["status"];
    $tabel = mysqli_query($koneksi, "UPDATE mfn_sales SET 
            tgl_sales='$tgl', 
            id_customer='$id_customer', 
            do_number='$do_number', status='$status' 
            WHERE id_sales='$id'");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='sales/salespetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='sales/salespetugas.php'</script>";
    }
}

if (isset($_POST['tambahitem'])) {
    $nama = $_POST["nama"];
    $uom = $_POST["uom"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];
    $tabel = mysqli_query($koneksi, "INSERT INTO mfn_item VALUES('','$nama','$uom','$hargabeli','$hargajual')");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='item/itempetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='item/itempetugas.php'</script>";
    }
}

if (isset($_POST['edititem'])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $uom = $_POST["uom"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];
    $tabel = mysqli_query($koneksi, "UPDATE mfn_item SET 
    nama_item='$nama', 
    uom='$uom', 
    harga_beli='$hargabeli', 
    harga_jual='$hargajual' 
    WHERE id_item='$id'");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='item/itempetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='item/itempetugas.php'</script>";
    }
}

if (isset($_POST['tambahtransaction'])) {
    $id_item = $_POST["id_item"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $amount = $quantity * $price;
    $tabel = mysqli_query($koneksi, "INSERT INTO mfn_transaction VALUES('','$id_item','$quantity','$price','$amount')");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='transaction/transactionpetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='transaction/transactionpetugas.php'</script>";
    }
}

if (isset($_POST['edittransaction'])) {
    $id = $_POST["id"];
    $id_item = $_POST["id_item"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $amount = $quantity * $price;
    $tabel = mysqli_query($koneksi, "UPDATE mfn_transaction SET 
    id_item='$id_item', 
    quantity='$quantity', 
    price='$price', 
    amount='$amount' 
    WHERE id_transaction='$id'");
    if (!$table) {
        echo "<script>alert('Yeeey Berhasil');window.location='transaction/transactionpetugas.php'</script>";
    } else {
        echo "<script>alert('Yaahhh Gagal');window.location='transaction/transactionpetugas.php'</script>";
    }
}





?>