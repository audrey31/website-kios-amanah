<?php
include 'connection.php';

$q = mysqli_query($connect, "SELECT * FROM barang");
mysqli_query($connect, "DELETE FROM barang
                        WHERE id_barang = '$_POST[id_barang]'");
header('location:../index.php');