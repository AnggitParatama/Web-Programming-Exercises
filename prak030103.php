<?php
function buatbintanglagi($n){
echo "<pre>";
for($i=0;$i<$n;$i++){
for($j=0;$j<($n-$i);$j++){
echo "*";
}
echo "\n";
echo "</pre>";
}
buatbintanglagi(4);
?>