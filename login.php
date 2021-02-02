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
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Yang Unik">
            </div>

            <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
        </form>
        
            <p>Belum mempunyai akun mahasiswa? <a href="register.php">Daftar di sini</a></p>
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/uniska2.jpeg" />
        </div>
    </div>
</div>
</body>
</html>

<?php
    session_start();
    include "koneksi.php";
    if(isset($_POST['login']))
    {
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        
        $user= mysqli_query($koneksi, "SELECT * FROM login_mhs WHERE username='$username' and password='$password'");
        $check = mysqli_num_rows($user);
        if($check>0)
        {
            $row = mysqli_fetch_array($user);
            $_SESSION["username"]= $row["username"];       
            $_SESSION["password"]= $row["password"];  

        echo "<div align='center'><h5>Silahkan Tunggu Proses...</h5></div>";
        echo "<meta http-equiv='refresh' content='1; url=http://localhost/web_uniska/datamahasiswa.php'>";
        }
        else
        {
            echo "<br><div align='center'><h5>Login Gagal!!!</h5></div>";
        }
          
    }
?>