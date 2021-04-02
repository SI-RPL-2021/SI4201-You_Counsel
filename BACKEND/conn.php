<?php
    $conn = mysqli_connect('localhost', 'root', '1202184224', 'you-counsel');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>