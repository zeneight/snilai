<?php
require_once('mysql2i.class.php');

$host="localhost";
$user="root";
$pass="";
$db="simna";

$entries=10;
$waktu=date("Y-m-d H:i:s");
	
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo "Gagal koneksi";
}
?>
