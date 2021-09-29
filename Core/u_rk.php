<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_ruangan'];
 $status = $_POST['status'];
 
//query for update data in database
 $query = "UPDATE tbl_ruangan SET status = '$status' WHERE id_ruangan = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    header('location:home.php?page=jadwal_ruangkelas&status=1');
}
?>