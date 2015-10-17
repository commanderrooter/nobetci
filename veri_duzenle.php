<?php
include 'mysqlcon.php';
$bilgi = $_POST['bilgi'];
$numara = $_POST['numara'];

			$sorgu_bilgi = mysql_query("select * from ogr_listesi where numara=$numara") or die ("olmadý");
			$sorgu_kat = mysql_query("select * from kat where numara=$numara") or die ("olmadý");
			$sorgu_piket = mysql_query("select * from piket where numara=$numara") or die ("olmadý");
			$oku_bilgi = mysql_fetch_array($sorgu_bilgi);
			$oku_kat = mysql_fetch_array($sorgu_kat);
			$oku_piket = mysql_fetch_array($sorgu_piket);
				
				echo " 
				<html><FORM ACTION=duzenle.php METHOD=post >
				Numara : <INPUT TYPE=text NAME=\"numara\" SIZE=\"6\" value=".$oku_bilgi['numara']."> <br>
				Ad : <INPUT TYPE=text NAME=\"ad\" SIZE=\"18\" value=".$oku_bilgi['ad']." ><br>
				Soyad : <INPUT TYPE=text NAME=\"soyad\" SIZE=\"18\" value=".$oku_bilgi['soyad']." ><br>
				Boluk : <INPUT TYPE=text NAME=\"boluk\" SIZE=\"6\" value=".$oku_bilgi['boluk']." ><br>
				Kýsým : <INPUT TYPE=text NAME=\"kisim\" SIZE=\"6\" value=".$oku_bilgi['kisim']." ><br>
				Oda : <INPUT TYPE=text NAME=\"oda\" SIZE=\"6\" value=".$oku_bilgi['oda']." ><br> 
				Evci-Bekar : <INPUT TYPE=text NAME=\"evci_bekar\" SIZE=\"6\" value=".$oku_bilgi['evci_bekar']." ><br> 
				Tuttuðu Kat Nöbeti : <INPUT TYPE=text NAME=\"kat_tuttu\" SIZE=\"6\" value=".$oku_kat['tuttu']." ><br>
				Son Kat Nöbeti : <INPUT TYPE=text NAME=\"kat_tarih\" SIZE=\"6\" value=".$oku_kat['son_tarih']." ><br>
				Tuttuðu Piket Nöbeti : <INPUT TYPE=text NAME=\"piket_tuttu\" SIZE=\"6\" value=".$oku_piket['tuttu']." ><br>
				Son Piket Nöbeti : <INPUT TYPE=text NAME=\"piket_tarih\" SIZE=\"6\" value=".$oku_piket['son_tarih']." ><br>
				<INPUT TYPE=submit >
				
				</form></html>";

?>