<?php

session_start();
if (empty($_SESSION["username"]) || empty($_SESSION["username"])) {
    echo 'Anda belum login';
    echo '<form id="form1" name="form1" method="post" action="./php/logout.php">
    <input type="submit" name="button" id="button" value="Keluar" />
</form>';
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kios Amanah</title>
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
        <div class="container mt-3">
            <h2>Barang</h2>
            <p>List barang-barang Kios Amanah</p>

            <div class="container mt-3">
                <form action="submit_process.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="submit" class="form-control" name="submit" value="Tambah">
                        </div>
                        <div class="col">
                            <input type="submit" class="form-control" name="submit" value="Hapus">
                        </div>
                    </div>
                </form>
            </div>
            <p>
            <form class="d-flex" action="index_search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </p>
            </p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './php/connection.php';

                    $q = mysqli_query($connect, "SELECT * FROM barang");
                    while ($data = mysqli_fetch_array($q))
                        echo "<tr><td>$data[id_barang]</td>
                                <td>$data[nama_barang]</td>
                                  <td>$data[harga_barang]</td>
                                  <td>
                                    <a href='update.php?nama_barang=$data[nama_barang]&e=1'>Edit</a>
                                  </td>

                              </tr>";
                    echo "</table>";
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>
<?php } ?>