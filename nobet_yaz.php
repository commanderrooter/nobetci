<?php
include 'mysqlcon.php';
include 'tarih_fonksiyonu.php';

$tarih1 = $_POST['tarih1'];
echo date('w',strtotime($tarih1));
$tarih2 = $_POST['tarih2'];
$nobet = $_POST['nobet'];
$tarihler = tarih_fark_bul($tarih1,$tarih2,"-");

	if($nobet == 'kat'){
		$sorgu = mysql_query("SELECT kat.id,kat.numara,kat.tuttu,kat.son_tarih,ogr_listesi.evci_bekar 
		       FROM kat,ogr_listesi WHERE kat.numara = ogr_listesi.numara ORDER BY kat.tuttu ASC");
		while($liste = mysql_fetch_assoc($sorgu)){
			
			$dizi_numara[] = $liste['numara'];  // Burada diziye atadık.
			echo $liste['numara']."\t";
			$dizi_tuttu[] = $liste['tuttu'];
			echo $liste['tuttu']."\t";
			$dizi_tarih [] = $liste['son_tarih'];
			echo $liste['son_tarih']."\t";
			$dizi_evci [] = $liste['evci_bekar'];
			echo $liste['evci_bekar']."<br>";
		} 
		echo count($dizi_numara)."<br>".count($dizi_tuttu)."<br>".count($dizi_tarih)."<br>".count($dizi_evci);
	}






?>
