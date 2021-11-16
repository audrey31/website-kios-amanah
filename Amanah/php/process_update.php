<?php
include 'connection.php';

$q = mysqli_query($connect, "SELECT * FROM barang");
mysqli_query($connect, "UPDATE barang SET nama_barang = '$_POST[nama_barang]', harga_barang = '$_POST[harga_barang]'
            WHERE id_barang ='$_POST[id_barang]'");
header('location:../index.php');