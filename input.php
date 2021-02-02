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
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2>Input Data Mahasiswa</h2>
            </div>

            <div class="card-body">
                <form action="" method ="POST" class="form-item">
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir ">
                    </div>

                    <div class="form-group">
                        <tr><label for="jenis_kelamin">Jenis Kelamin</label><br/>
                        <td><input type="radio" name="jenis_kelamin" value="L" id="laki">
                        <label for="laki">Laki-Laki</label><br/>
                        
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan"/>
                        <label for="perempuan">Perempuan</label></td></tr>
                    </div>             

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>        

                    <div class="form-group">
                        <label for="kode_pos">Kodepos</label>
                        <input type="number" name="kode_pos" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>        


                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger" name="batal">BATAL</button>
                </form>


            </div>
        </div>
    </div>   

</body>
</html>

<?php

    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $npm             = $_POST['npm'];
        $nama            = $_POST['nama'];
        $tempat_lahir    = $_POST['tempat_lahir'];
        $tanggal_lahir   = $_POST['tanggal_lahir'];
        $jenis_kelamin   = $_POST['jenis_kelamin'];
        $alamat          = $_POST['alamat'];
        $kode_pos        = $_POST['kode_pos'];

        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES(
            '0', '$npm', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$kode_pos'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Disimpan...</h5></div>";
        echo "<meta http-equiv='refresh' content='1; url=http://localhost/web_uniska/datamahasiswa.php'>";
    }
?>