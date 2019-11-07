<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "root69";
	$port = "5432";
	$dbname = "tb_angkot";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>