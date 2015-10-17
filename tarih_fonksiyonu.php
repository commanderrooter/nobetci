<?php
function tarih_ayir($tarih){
	$yil = "";
	$ay = "";
	$gun = "";
	
	$a=0;
	for($i = 0; $i<=9; $i++) { 
		if($tarih[$i] == "-"){
			$a++;
		}
		if($a == 0){
			$yil = "".$yil.""+"".$tarih[$i]."";
			$dizi_tarih['yil'] = $yil;
		}
		if($a == 1) {
			$ay = "".$ay.""+"".$tarih[$i]."";
			$dizi_tarih['ay'] = $ay;
		}
		if($a == 2) {
			$gun = "".$gun.""+"".$tarih[$i]."";	
			$dizi_tarih['gun'] = $gun;
		}
	}
	//echo "".$dizi_tarih[0]."".$dizi_tarih[1]."".$dizi_tarih[2]."";
	return $dizi_tarih;

}
$dizi = tarih_ayir("2015-12-12");
echo "".$dizi['yil']."".$dizi['ay']."".$dizi['gun']."";
function tarih_hesapla($tarih1,$tarih2){
	$gun_farki = 0;
	$tarih1 = tarih_ayir($tarih1);
	$tarih2 = tarih_ayir($tarih2);
	if($tarih1['yil'] == $tarih2['yil']){
		if($tarih1['ay'] == $tarih2['ay']){
			if($tarih2['gun']>$tarih1['gun']){
			$gun_farki = $tarih2['gun'] - $tarih1['gun'];
			} else if ($tarih2['gun']<$tarih1['gun']){
			$gun_farki = $tarih1['gun'] - $tarih2['gun'];	
			)
		} else {
			
		}
	}else {
		
	
	if($tarih2['yil']%4!=0){
		$gun_farki += 365;
	}else {
		$gun_farki += 366;
	}
	
	}
	
}


?>