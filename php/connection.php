<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dry_kiss";
$dbPort = 3306;


$connect = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    die("Something went wrong while connecting to db -> " . mysqli_connect_error());
}
