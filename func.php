<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$nama_database = "db_artikel";

	$db = mysqli_connect($server, $username, $password, $nama_database);

	if( !$db ){
		die("Koneksi Gagal : " . mysqli_connect_error());
	}
?>