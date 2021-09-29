<?php 
include "conn.php";

$sql = "DELETE FROM setup_pelajaran WHERE id = '".$_GET[id]."'";
$hapus = mysql_query($sql);

if ($sql){
echo "<script>alert('Data Berhasil di Hapus'); window.location = 'home.php?page=setup_pelajaran';</script>";
} else {
echo "<script>alert('Gagal di Hapus'); window.location = 'home.php?page=setup_pelajaran';</script>";
}


?>