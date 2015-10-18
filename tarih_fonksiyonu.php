<?php
function tarih_fark_bul($tarih1,$tarih2,$ayrac)
{
//mktime( int saat, int dakika, int saniye, int ay, int gun, int yil);
list($y1,$a1,$g1) = explode($ayrac,$tarih1);
list($y2,$a2,$g2) = explode($ayrac,$tarih2);
$t1_timestamp = mktime('0','0','0',$a1,$g1,$y1);
$t2_timestamp = mktime('0','0','0',$a2,$g2,$y2);
if ($t1_timestamp > $t2_timestamp)
{
	$result['0'] = ($t1_timestamp - $t2_timestamp) / 86400;
	for($i=1; $t1_timestamp >= $t2_timestamp; $i++){
		$result[$i] = date('Y-m-d',($t2_timestamp));
		//echo $result[$i]."<br>";
		$t2_timestamp += 86400;
	}
	
}
else if ($t2_timestamp > $t1_timestamp)
{
	$result['0'] = ($t2_timestamp - $t1_timestamp) / 86400;
	for($i=1; $t2_timestamp >= $t1_timestamp; $i++){
		$result[$i] = date('Y-m-d',($t1_timestamp));
		//echo $result[$i]."<br>";
		$t1_timestamp += 86400;
	}
}
return $result;
}
function tarih_kontrol($tarih1,$tarih2,$ayrac){
	list($y1,$a1,$g1) = explode($ayrac,$tarih1);
	list($y2,$a2,$g2) = explode($ayrac,$tarih2);
	$t1_timestamp = mktime('0','0','0',$a1,$g1,$y1);
	$t2_timestamp = mktime('0','0','0',$a2,$g2,$y2);
	if ($t1_timestamp > $t2_timestamp)
	{
		echo "buyuk";
		return true;
	}
	if ($t2_timestamp > $t1_timestamp) 
	{
		echo "kucuk";
		return false;
	}
}
?>