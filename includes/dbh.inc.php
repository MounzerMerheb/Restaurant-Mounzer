<?php

$serverName ='localhost';
$dBUserName ='root';
$dBPassword ='';
$dBName ='webproject';

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn){
    die('connection failed: ' . mysqli_connect_error());
}