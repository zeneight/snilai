<?php 
include "conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM tbl_jadwal WHERE id_jadwal = $id";
$hapus = mysql_query($sql);

if ($sql){
echo "<script>alert('Data Berhasil di Hapus'); window.location = 'home.php?page=jadwal_pengajaran&status=';</script>";
} else {
echo "<script>alert('Gagal di Hapus'); window.location = 'home.php?page=jadwal_pengajaran&status=';</script>";
}


?>