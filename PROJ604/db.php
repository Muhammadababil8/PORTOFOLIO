<?php
$server="localhost";
$user="root";
$pass="";
$db="db_wb1";

$con=new mysqli($server,$user,$pass,$db);

// if($con->connect_error){
//     die("Koneksi gagal: ".$con->connect_error);
// }else{
//     echo "Koneksi berhasil";
// }