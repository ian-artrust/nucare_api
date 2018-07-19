<?php

$server 	= "localhost";
// $server 	= "153.92.4.115";
$user 		= "root";
$password 	= "dbadmin";
$db 		= "dbnucare";

$konek = mysqli_connect($server,$user, $password,$db);
if($konek){
	//echo "Koneksi Database Sukses";
} else {
	die('Koneksi Gagal');
	mysql_error();
}
?>