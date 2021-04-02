<?php 
require 'conn.php'; 
require 'connsession.php';

$idgenerator = rand(10000, 99999);
$id = 'C'+$idgenerator;
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$univ = $_POST['univ'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];
$access = 1;



$insert = mysqli_query($conn, "INSERT INTO users VALUES ('$clientsid', '$username', '$nama', '$email', '$alamat', '$notelp' '$password', '$univ', '$role')");
$regis = "reg-sc";
$_SESSION['adduser'] = $adduser;
header("location:./login1.php");


?>