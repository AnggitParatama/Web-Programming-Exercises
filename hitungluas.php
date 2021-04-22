<?php
$file_handle = fopen("datatabung.txt", "r");
while (!feof($file_handle)){
$line_of_text = fgets ($file_handle);
$parts = explode (",", $line_of_text);
$phi = 22/7;
$jarijari = $parts[1];
$tinggi = $parts[2];
$hasil = 2 * $phi * $jarijari*($jarijari+$tinggi);
echo "<br> Luas Tabung ".$parts[0]." dengan diameter ".$parts[1]." dan tinggi ".$parts[2]." adalah ".$hasil." satuan luas </br>";
}
fclose($file_handle)
?>
</table>
</html>