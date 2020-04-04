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
            <div class="col-md-5 my-5">
                <h1>Detail Petugas</h1>
                <?php
        $id=$_GET['id'];
        $sql=mysqli_query($koneksi, "select * from tabel_petugas where id='$id'")or die(mysqli_error());
        while($data=mysqli_fetch_array($sql)){
            ?>					
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td><?php echo $data['Nama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $data['Alamat'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo ($data['JK']); ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?php echo ($data['Tanggal_Lahir']) ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><?php echo $data['NoTlp'] ?></td>
                </tr>
            </table>
            <a href="petugas.php" class="btn btn-success">Kembali</a>
            <?php 
        }
        ?> 
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>