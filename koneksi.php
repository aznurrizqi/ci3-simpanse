<?php
$server = "localhost";
$username = "simp8013";
$password = "jep78Y0Bk9";
$database = "simp8013_dbsimpanse";
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");?>