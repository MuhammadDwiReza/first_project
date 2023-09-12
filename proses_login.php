<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];

$password = sha1($_POST['password']);

$sql = "select * from user where username ='$username' and password ='$password'";

$data =mysqli_query($koneksi, $sql);

$result = mysqli_num_rows($data);

if ($result === 1) {
    echo "login berhasil";
    $_SESSION['username'] = $username;
    header('location:index.php');
} else {
    echo "username atau password salah";
}