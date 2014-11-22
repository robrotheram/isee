<?php
    $request = $_POST['request_type'];

    switch($request){
        case "LOGIN": break;
        case "REGISTER":
            require_once "function.php";
            registerUser($_POST['USERNAME'],$_POST['PASSWORD'],$_POST['EMAIL']);
        case "LIST YEARS":break;
    }

?>