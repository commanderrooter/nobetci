<?php
include 'mysqlcon.php';
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$numara = $_POST['numara'];
$boluk = $_POST['boluk'];
$kisim = $_POST['kisim'];
$oda = $_POST['oda'];
$evci_bekar = $_POST['evci_bekar'];
$kat_tuttu = $_POST['kat_tuttu'];
$kat_tarih = $_POST['kat_tarih'];
$piket_tuttu = $_POST['piket_tuttu'];
$piket_tarih = $_POST['piket_tarih'];

echo "$numara";
//echo ".$_POST['numara'] , $_POST['adsoyad'] , $_POST['boluk'] , $_POST['kisim'] ,$_POST['oda']"
mysql_query("UPDATE ogr_listesi SET  ad='$ad',soyad='$soyad', boluk='$boluk', kisim='$kisim', oda='$oda' , evci_bekar = '$evci_bekar' WHERE numara='$numara'") or die ("olmuyo");
mysql_query("update kat set  tuttu='$kat_tuttu',son_tarih='$kat_tarih' WHERE numara='$numara'")or die ("olmuyo2");
mysql_query("update piket set tuttu='$piket_tuttu',son_tarih='$piket_tarih' WHERE numara='$numara'")or die ("olmuyo3");
//mysql_query("")
//UPDATE ogr_listesi SET id=[value-1],numara=[value-2],adsoyad=[value-3],boluk=[value-4],kisim=[value-5],oda=[value-6] WHERE 1
?>