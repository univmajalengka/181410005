<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">SBDL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="petugas.php">DATA PETUGAS</a>
            </div>
        </div>
    </nav>
        <div class="row justify-content-md-center">
            <div class="col my-5">
                <h2 align="center">DATA PETUGAS PENGGAJIAN</h2>				
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                            <?php
                                $no = 1;
                                $petugas=mysqli_query($koneksi, "SELECT * FROM tabel_petugas");
                                while($data=mysqli_fetch_array($petugas)){
                            ?>

                        <tr>
                        <th scope="row"><?= $no++?></th>
                        <td><?= $data['Nama']?></td>
                        <td>
                        <a href="detail_petugas.php?id=<?= $data['id'];?>" type="button" class="btn btn-success">Detail</a>
                        </td>
                        </tr>

                            <?php
                                }
                            ?>
                    </tbody>
                    </table>
                    <a href="tambah_petugas.php" class="btn btn-primary"> Tambah petugas</a>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>