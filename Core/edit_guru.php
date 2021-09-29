<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_guru'];
 $nama_guru = $_POST['nama_guru'];
 $nip = $_POST['nip'];
 $kelamin = $_POST['kelamin'];
 $alamat_guru = $_POST['alamat_guru'];
 $telpon_guru = $_POST['telpon_guru'];
 
//query for update data in database
 $query = "UPDATE data_guru SET nama_guru = '$nama_guru', nip = '$nip', kelamin = '$kelamin', alamat_guru = '$alamat_guru', telpon_guru = '$telpon_guru' WHERE id_guru = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    header('location:home.php?page=data_guru&status=1');
}
else
{
echo
	error;
}
?>