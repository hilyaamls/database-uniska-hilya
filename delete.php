<?php
    include "koneksi.php";
    $no_mhs = $_GET['no_mhs'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE no_mhs= '$no_mhs'");

    echo "<meta http-equiv='refresh' content='1; url=http://localhost/web_uniska/datamahasiswa.php'>";
?>