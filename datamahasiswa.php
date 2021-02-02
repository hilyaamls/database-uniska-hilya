<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        echo "<div align='center'><h2>Silahkan Login Terlebih Dulu <br><a href = 'login.php'>Klik Disini</a></h2></div>";
        exit;
    }
?>

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
    <header>
    <div class="container col-md-10">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h2>Database Mahasiswa UNISKA</h2>
        
        <form action="datamahasiswa.php" method="GET">
        <label> Cari : </label>
        <input type="text" name="cari">
        <input type="submit" class="btn btn-success" value="Cari">
        </form>
        </div>

        <div class="card-body">
            <a href="input.php" class="btn btn-primary">Input Data</a>

            <table class="table table-bordered">
            <tr>
                    <th>No.</th>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kodepos</th>
                    <th>Action</th>
            </tr>

<?php
    include "koneksi.php";
    if(isset($_GET['cari']))
    {
        $cari = $_GET['cari'];
        echo "<b> Hasil Pencarian : " .$cari."</b>";

    }
?>

<?php
    $no_mhs=1;
    $nama = "";

    if(isset($_GET['cari']))
    {
        $nama = $_GET['cari'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama LIKE '%".$nama."%'");
    }

    else{
        $hasil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    }

    WHILE($data = mysqli_fetch_array($hasil)){
    ?>

    <tr>
        <td><?php echo $no_mhs++; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['tanggal_lahir']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['kode_pos']; ?></td>
        <td>
            <a href="edit_mahasiswa.php?no_mhs= <?php echo $data['no_mhs']; ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="delete.php?no_mhs=<?php echo $data['no_mhs']; ?>" class="btn btn-sm btn-danger">Hapus</a>
        </td>
    </tr>

    <?php } ?>
    </table>
        <a href= "logout.php" class="btn btn-sm btn-danger">Logout</a>
        </div>
    </div>
 </div>        
</body>
</html>



    
