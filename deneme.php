<?php
$tarih = $_POST['tarih'];
$tarih1 = "2015-07-29";
$tarih2 = "";

for($i = 0; $i<=9; $i++) {
if($tarih1[$i] != "-"){
	$tarih2 = "".$tarih2.""+"".$tarih1[$i]."";
	}
}

echo "<br>tarih2 : ".$tarih2."";

$tarih1 = "2015-12-30";
$yil1 = "";
$ay1 = "";
$gun1 = "";
$tarih2 = "2016-12-30";
$yil2 = "";
$ay2 = "";
$gun2 = "";

$tarih3 = "";
$tarih4 = "";
$a=0;
for($i = 0; $i<=9; $i++) { 
	if($tarih1[$i] == "-"){
		$a++;
	}
	if($a == 0){
		$yil1 = "".$yil1.""+"".$tarih1[$i]."";
	}
	if($a == 1) {
		$ay1 = "".$ay1.""+"".$tarih1[$i]."";	
	}
	if($a == 2) {
		$gun1 = "".$gun1.""+"".$tarih1[$i]."";	
	}
}
	echo "YIL : ".$yil1." AY : ".$ay1." GUN : ".$gun1."";
$a=0;
for($i = 0; $i<=9; $i++) { 
	if($tarih2[$i] == "-"){
		$a++;
	}
	if($a == 0){
		$yil2 = "".$yil2.""+"".$tarih2[$i]."";
	}
	if($a == 1) {
		$ay2 = "".$ay2.""+"".$tarih2[$i]."";	
	}
	if($a == 2) {
		$gun2 = "".$gun2.""+"".$tarih2[$i]."";	
	}
}
	echo "<br>YIL : ".$yil2." AY : ".$ay2." GUN : ".$gun2."<br>";
	
for($i = 0; $i<=9; $i++) {
if($tarih1[$i] != "-" && $tarih2[$i] != "-"){
	$tarih3 = "".$tarih3.""+"".$tarih1[$i]."";
	$tarih4 = "".$tarih4.""+"".$tarih2[$i]."";
	}
}
$kontrol = true;
global $i=0;
while(true){
	$i++;
	if(($yil1 == $yil2)&& ($ay1 == $ay2) && ($gun1 == $gun2)){
		$son_tarih[$i] = "$yil1-$ay1-$gun1";
		break;
	} 
	if($ay1<=12){
		if($gun1 <= 31){
			$son_tarih[$i] = "$yil1-$ay1-$gun1";
			$gun1 += 1;
		}else{
			$ay1 += 1;
			$kontrol = false;
		}
	}
	if($kontrol == false){
		if($ay1>12) {
		$yil1 += 1;
		$ay1 = "01";
		
		}
			$gun1 = "01";
			$son_tarih[$i] = "$yil1-$ay1-$gun1";
			$gun1 += 1;
			$kontrol = true;
	}	
	
}
echo " GUN : ".$i."";


?>