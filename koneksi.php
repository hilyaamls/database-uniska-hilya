<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_univ");

    if(mysqli_connect_error($koneksi))
    {
        echo "Koneksi Gagal". mysqli_connect_error();  
    }

?>