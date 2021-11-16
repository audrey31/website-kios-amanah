<?php
$value = $_POST["submit"];

switch ($value) {
    case 'Update':
        header('location:update.php');
        break;
    case 'Tambah':
        header('location:insert.php');
        break;
    case 'Hapus':
        header('location:delete.php');
        break;
}
