<html>
<table border="1">
<h3>Data Ukuran Tabung</h3>
<tr>
<td>Nama Tabung</td>
<td>Diameter</td>
<td>Tinggi</td>
<td>Luas</td>
</tr>
<?php
//memebaca file
$file_handle = fopen("datatabung.txt", "r");
while (!feof($file_handle)){
$line_of_text = fgets ($file_handle);
$parts = explode(",",$line_of_text);
echo "<tr> 
<td>$parts[0]</td>
<td>$parts[1]</td>
<td>$parts[2]</td>
<td>
<a href=hitungluas.php>view</a></td>
</tr>";
}
fclose ($file_handle);

?>
</table>
</html>

