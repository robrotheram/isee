<?php

$conn = mysqli_connect($db_host, $db_username, $db_password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>