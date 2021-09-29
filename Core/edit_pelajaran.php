<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_pelajaran'];
 $nama_pelajaran = $_POST['nama_pelajaran'];
 
//query for update data in database
 $query = "UPDATE setup_pelajaran SET nama_pelajaran = '$nama_pelajaran' WHERE id_pelajaran = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
	 header('location:home.php?page=setup_pelajaran&status=1');
}
?>
<a href="home.php?page=setup_pelajaran">Kembali</a>