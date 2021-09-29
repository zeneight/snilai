<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_j'];
 $id_guru = $_POST['id_guru'];
 $id_pelajaran = $_POST['id_pelajaran'];
 $id_kelas = $_POST['id_kelas'];
 $status = $_POST['status'];
 $jam = $_POST['jam'];
 $hari = $_POST['hari'];
 
//query for update data in database
 $query = "UPDATE tbl_jadwal SET id_guru = '$id_guru', id_pelajaran = '$id_pelajaran', id_kelas = '$id_kelas', status = '$status', jam = '$jam', hari='$hari' WHERE id_jadwal = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    header('location:home.php?page=jadwal_pengajaran&status=1');
}
else
{
echo
	error;
}
?>