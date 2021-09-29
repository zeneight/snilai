<?php
include 'conn.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM setup_kelas WHERE id_kelas = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<div id="page-heading">
    <h1>Form Edit Kelas</h1>
</div>

<form method="post" action="edit_kelas.php">
<input type="hidden" name="id_kelas" value="<?php echo $data['id_kelas']; ?>">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"><input type="text" class="inp-form" name="id_kelas" disabled='disable' value="<?php echo $data['id_kelas']; ?>"></td>
  </tr>

  <tr>
  	<td>Nama Kelas</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>"> </td>
  </tr>

 
<tr>
  	<td></td> <td></td> <td>
  	<input type="SUBMIT" name="SUBMIT" value="Save" class="form-submit"></td>
  </tr>
</table>
</center>
</form>