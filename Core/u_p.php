<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_jadwal'];
 $status = $_POST['status'];
 
//query for update data in database
 $query = "UPDATE tbl_jadwal SET status = '$status' WHERE id_jadwal = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    header('location:home.php?page=jadwal_pengajaran&status=1');
}
?>