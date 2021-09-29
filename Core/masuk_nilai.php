<?php
include 'conn.php';
?>

<div id="page-heading">
    <h1>Masukkan Nama Guru</h1>
</div>

<form action="?page=input_nilai&status=" method="post">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
  <tr>
                      <th valign="top">Nama Guru </th>
                      <td><select name="id_guru"  class="styledselect_form_1">
                              <option value="#"> - pilih - </option>
                  <?php
						  $namas=mysql_query("select * from data_guru order by id_guru asc");
						  while($row2=mysql_fetch_array($namas)){
						  ?>
							  <option value="<?php echo $row2['id_guru'];?>"><?php echo $row2['nama_guru'];?></option>
						  <?php
						  }
						  ?>    

                        </select></td>
   </tr>
  <tr>
   <td></td>
  	<td>
  	<input type="SUBMIT" name="submit" value="Save" class="form-submit">
   <input name="kembali" type="button" class="form-kembali" id="SUMBIT" onclick="history.back();" value="Kembali"></td>
  </tr>
</table>
</form>