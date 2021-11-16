<?php
session_start();
include "./php/connection.php";
$title = "Tambah Barang";

if (empty($_SESSION["username"]) || empty($_SESSION["username"])) {
    echo 'Anda belum login';
    echo '<form id="form1" name="form1" method="post" action="./php/logout.php">
    <input type="submit" name="button" id="button" value="Keluar" />
</form>';
} else {

?>
    <!DOCTYPE html>
    <html lang=”en”>

    <head>
        <meta charset=”utf-8">
        <title><?php echo $title; ?></title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="./php/logout.php">Logout</a>
                </li>
            </ul>
            <div class="d-flex justify-content-center container-fluid">
                <a class="navbar-brand" href="index.php">Amanah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <h1><?php echo $title; ?> </h1>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="./php/process_insert.php">
                <table border="1">
                    <tr>
                        <td>Nama Barang</td>
                        <td><input name="nama_barang" type="text"></td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input name="harga_barang" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Submit" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

    </html>
<?php } ?>