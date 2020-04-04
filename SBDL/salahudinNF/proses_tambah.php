<?php
    include 'config.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tgl'];
    $notlp = $_POST['notlp'];

    $query = mysqli_query($koneksi, "INSERT INTO tabel_petugas VALUES('', '$nama', '$alamat', '$jk', '$tgl', '$notlp')");
    header("Location:petugas.php");
?>