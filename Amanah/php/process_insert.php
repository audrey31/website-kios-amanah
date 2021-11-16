<?php
include 'connection.php';

$q = mysqli_query($connect, "SELECT * FROM barang");
mysqli_query($connect, "INSERT INTO barang VALUES ('', '$_POST[nama_barang]', '$_POST[harga_barang]')");
header('location:../index.php');
