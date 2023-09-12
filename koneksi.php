<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'siswa_db');

if (mysqli_connect_errno()) {
    echo "Koneksi Berhasil :" . mysqli_connect_error();
}