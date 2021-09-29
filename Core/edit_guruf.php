<h2> Edit Data <h2>
<?php
include 'conn.php';
$query = "SELECT * FROM setup_pelajaran"; //the query for get all data in tb_student
$result = mysql_query($query);

echo "<table border='0' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='orange' align='center'>
		<td> <b> No </b> </td>
        <td> <b> Nama Pelajaran </b> </td>
        </tr>";
while ($data = mysql_fetch_array($result)) //mysql_fetch_array = get the query data into array
{
  echo "<tr align='center'>
  			<td>".$data['id']."</td>
            <td>".$data['nama_pelajaran']."</td>
            <td> <i> <a href='edit_pelajaran.php?id=".$data['id']."'> Update </a> </i></td>
       </tr>";
}
echo "</table>";
?>