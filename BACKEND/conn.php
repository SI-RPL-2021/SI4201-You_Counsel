<?php
    $conn = mysqli_connect('localhost', 'root' , '' , 'you-counsel');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
