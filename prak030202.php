<?php
function hitungDenda($tglHarusKembali, $tglKembali)
{
$tgl1 = explode("-", $tglHarusKembali);
$year1 = $tgl1[0];
$month1 = $tgl1[1];
$date1 = $tgl1[2];
$tgl2 =explode("-",$tglKembali);
$year2 = $tgl2[0];
$month2 = $tgl2[1];
$date2 = $tgl2[2];

$jd1 = gregoriantojd($month1,$date1,$year1);
$jd2 = gregoriantojd($month2,$date2,$year2);

$selisih =$jd2 - $jd1;

//echo "selisih kedua tanggal adalah {selisih} hari";
$denda = 3000;
$totalDenda = $selisih * $denda;
return $totalDenda;
}

echo "Besar Dendanya Adalah", hitungDenda("2021-01-03", "2021-01-05");

?>