<?php
session_start();
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$mysqli = new mysqli('localhost', 'root', '', 'amanah');
$rs = $mysqli->query("CALL SP_Login ('" . $username . "','" . $password . "')");
$row = $rs->fetch_object();

if ($row) {
    $_SESSION["state"] = True;
    $state = $_SESSION["state"];
    header("location: ../index.php");
} else {
    echo "Akun anda belum terdaftar";
    echo '<form action="../login.html" method="POST"><input type="submit" value="Kembali ke login"></form>';
}
