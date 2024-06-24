<?php

//    Connecting Database using PHP

$server_name = "localhost";
$user_name = "root";
$password = "";

// Creating the connection

$conn = new mysqli($server_name, $user_name, $password);

// check connection

if ($conn->connect_error) {
    die("Connection Failed! " . $conn->connect_error);
} 

// echo 'connected';

$sql = "CREATE DATABASE mydb";

if($conn->query($sql) === TRUE){
    echo "DataBase Created Sucessfully.";
}else{
    echo "Error Creating Database: ". $conn->error;
}

$conn->close();

// Create Database

