<?php
require "setting.php";
require "db_connect.php";
function registerUser($username,$email,$password){

    global $conn;

    $sql = "INSERT INTO MyGuests (username, password, email) VALUES ('$username', '$password', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}




?>