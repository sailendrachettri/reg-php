<?php
    // development code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Student";

    // production code
    // $servername = "localhost";
    // $username = "xzZbbLJLPW";
    // $password = "X0wSGrJL3A";
    // $dbname = " xzZbbLJLPW";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }
    else{
        echo "connected.";
    }
?>  