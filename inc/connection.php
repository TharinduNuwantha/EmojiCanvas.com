<?php
    $servername = "localhost";//localhost
    $username = "root";//id21875052_root
    $password = "";//keriPakaya716@2024 || infinitifree : b3RjQkMmwM7MWZ // 000 : keriPakaya716@2024LST
   // $password = "";//keriPakaya716@2024 || [infinitifree : login:keriPakaya716@2024 AP ; EQtIOO6nMxrD]
    $database = "imojidatabse";//id21875052_imojidatabse

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
        $conn->query("SET NAMES utf8mb4");

        // Will NOT affect $mysqli->real_escape_string();
        $conn->query("SET CHARACTER SET utf8mb4");

        // But, this will affect $mysqli->real_escape_string();
        $conn->set_charset('utf8mb4');

        // But, this will NOT affect it (UTF-8 vs utf8mb4) -- don't use dashes here
        $conn->set_charset('UTF-8');
    }
?>
