<?php 
include "conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM tbl_ruangan WHERE id_ruangan = $id";
$hapus = mysql_query($sql);

if ($sql){
echo "<script>alert('Data Berhasil di Hapus'); window.location = 'home.php?page=jadwal_ruangkelas&status=';</script>";
} else {
echo "<script>alert('Gagal di Hapus'); window.location = 'home.php?page=jadwal_ruangkelas&status=';</script>";
}


?>