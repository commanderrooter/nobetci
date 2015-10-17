<?php
include 'mysqlcon.php';
if ($_POST['ad'] != '' && $_POST['soyad'] != '' && $_POST['numara'] != '' && $_POST['boluk'] != '' && $_POST['kisim'] != '' && $_POST['oda'] != '' && $_POST['evci_bekar'] != '' ){
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$numara = $_POST['numara'];
	$boluk = $_POST['boluk'];
	$kisim = $_POST['kisim'];
	$oda = $_POST['oda'];
	$evci_bekar = $_POST['evci_bekar'];
		echo "$ad, $numara , $boluk , $kisim , $oda" ;
		 mysql_query("INSERT INTO `ogr_listesi`(`numara`, `ad`,`soyad`, `boluk`, `kisim`, `oda` , evci_bekar) VALUES ('$numara','$ad','$soyad','$boluk','$kisim','$oda','$evci_bekar')") or die("OLMADI");
		 mysql_query("INSERT INTO `piket`(numara,tuttu,son_tarih) VALUES ('$numara','','')")or die ("piket eklenmedi");
		 mysql_query("INSERT INTO `kat`(numara,tuttu,son_tarih)  VALUES ('$numara','','')")or die ("kat eklenmedi");
		 mysql_close($baglanti); // baglanti degiskeni mysqlcon.php icinde.
	}else {
		echo "Veri Girisi Yapinizz";
	}

?>
