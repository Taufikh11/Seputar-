<?php

    $koneksi = mysqli_connect("localhost","root","","seputar_olahraga");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " .mysqli_connect_error();
    }

?>