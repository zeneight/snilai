<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_kelas'];
 $nama_kelas = $_POST['nama_kelas'];
 
//query for update data in database
 $query = "UPDATE setup_kelas SET nama_kelas = '$nama_kelas' WHERE id_kelas = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
	header('location:home.php?page=setup_kelas&status=1');
}
{
echo
	error;
}
?>