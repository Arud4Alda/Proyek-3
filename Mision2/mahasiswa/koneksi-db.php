<?php
$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "mahasiswa";

$conn = mysqli_connect($hostname, $username, $password, $database) or die('error : ' . mysqli_connect_error());