<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa Uniska</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <p>&larr; <a href="index.php">Home</a>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Buat Username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Buat Password Yang Unik">
            </div>

            <button type="submit" class="btn btn-success btn-block" name="daftar">Daftar</button>
        </form>
        
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/uniska2.jpeg" />
        </div>
    </div>
</div>
</body>
</html>

<?php

    include "koneksi.php";
    if(isset($_POST['daftar']))
    {
        $nama       = $_POST['nama'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        
        mysqli_query($koneksi, "INSERT INTO login_mhs VALUES(
            '0', '$nama', '$username', '$password' 
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5>Silahkan Tunggu...</h5></div>";
        echo "<meta http-equiv='refresh' content='1; url=http://localhost/web_uniska/login.php'>";

    }
?>