<?php

// baca operasi
$bil1 = $_POST['NIM'];
$bil2 = $_POST['Nama'];
$bil3 = $_POST['Tgllhr'];
$bil4 = $_POST['tmptlhr'];



// proses perhitungan
$namaFile = "datamhs.txt";
$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
fwrite($myfile, "$bil1 = $_POST['NIM']");
fclose($myfile);
}

// menampilkan hasil perhitungan
<html>
<table width="200" boder="1">
<h3>Data Mahasiswa</h3>
<tr>
<td>No</td>
<td>NIM</td>
<td>Nama Mhs</td>
<td>Tanggal Lahir</td>
<td>Tempat Lahir</td>
<td>Usia (Tahun)</td>
</tr>
//membaca file
$nourut=0;
$file_handle = fopen("datamhs.txt","r");
while (!feof($file_handle)) {
$nourut++;
$line_of_text = fgets ($file_handle);
$parts = explode ("|",$line_of_text);
$usia = new datetime ($parts[2]);
$today = new datetime ();
$diff=$usia->diff($today);
echo "<tr><td>$nourut.</td>
<td>$parts[0]</td>
<td>$parts[1]</td>
<td>$parts[2]</td>
<td>$parts[3]</td>
<td>$diff->y</td>
</tr>";
}
fclose($file_handle);

echo "jumlah data :$nourut";
?>
</table>
</html>
?>