<?php
include "conn.php";
//get the value from form update
 $id = $_POST['id_siswa'];
 $nama_siswa = $_POST['nama_siswa'];
 $nis = $_POST['nis'];
 $kelamin = $_POST['kelamin'];
 $alamat_siswa = $_POST['alamat_siswa'];
 $telpon_siswa = $_POST['telpon_siswa'];
 
//query for update data in database
 $query = "UPDATE data_siswa SET nama_siswa = '$nama_siswa', nis = '$nis', kelamin = '$kelamin', alamat_siswa = '$alamat_siswa', telpon_siswa = '$telpon_siswa' WHERE id_siswa = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    header('location:home.php?page=data_siswa&status=1');
}
else
{
echo
	error;
}
?>