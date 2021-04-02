<?php
session_start();
$id = $_SESSION['id'];
$username =  $_SESSION['username'];
$_SESSION['id'] = $id;
$_SESSION['username'] = $username;

if(isset($_SESSION['delete'])){
    $delete = $_SESSION['delete'];
}else{
    $delete = NULL;
}
?>