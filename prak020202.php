<?php
$no = 1;
$baris = 4;
$kolom = 5;
echo "<table border=1>";
for ($i=1;$i<=$baris;$i++){echo"<tr>";for($j=1;$j<=$kolom;$j++){echo"<td>";echo $no++ ; echo"</td>";}
echo "</tr>";}
echo "</table>";
?>