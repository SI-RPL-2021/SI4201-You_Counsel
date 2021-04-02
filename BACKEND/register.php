<?php 
require 'conn.php'; 
require 'connsession.php';

$idgenerator = rand(10000, 99999);
$id = 'C'.strval($idgenerator);

echo $id;

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$univ = $_POST['univ'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];
$access = 1;



$insert = mysqli_query($conn, "INSERT INTO clients VALUES ('$id', '$username', '$nama', '$email', '$alamat', '$notelp', '$password', '$univ', '$access')");

$regis = "reg-sc";
$_SESSION['adduser'] = $adduser;
header("location:../login1.php");


?>