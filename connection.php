<?php
    // development code
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "Student";
    
    // production code
    $servername = "remotemysql.com";
    $username = "QeBlXOUlJO";
    $password = "8DHzkbA6hS";
    $dbname = "QeBlXOUlJO";


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }
    // else{
    //     echo "connected.";
    // }
?>  