<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";


    // connecting to the database
    $conn = new mysqli($localhost,$username,$password,$db_name);

    if($conn->connect_error){
        die("Connection Failed!". $conn->connect_error);
    }

    // echo "Connection to database happened sucessfully!";