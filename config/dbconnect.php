<?php

$host = "localhost";
$user = "voteonlineuser";
$password = "f.DX4^N}Oscl";
$database = "voteonline";
error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors

// connect to the database server
$conn = mysqli_connect($host, $user, $password) or die("Could not connect to database");
// select the right database
mysqli_select_db($conn, $database);
// END Database connection and Configuration
