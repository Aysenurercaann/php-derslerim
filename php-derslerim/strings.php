<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title> My Work3 </title>
</head>
<Body>
<?php

$urunAdi = "Leke Kremi ";
$urunFiyati = 300 ;
$kdvOrani = 0.18 ;


$sonuc = $urunAdi. " isimli ürünümüz ".$urunFiyati." TL'dir. ";
 echo $sonuc ;
echo "<br>";
 //kestirme yoludur.
$sonuc2 =" {$urunAdi} isimli ürünümüz {$urunFiyati} TL'dir. ";
echo $sonuc2 ;
echo "<br>";
 $kdvFiyati = $urunFiyati + ($urunFiyati * $kdvOrani);
 $kdvFiyati = "Leke Kremi adlı ürünümüzün kdv'li satış fiyatı {$kdvFiyati} TL'dir. ";
 echo $kdvFiyati ;
 echo "<br>";


 // String fonksiyonları
 echo strlen($sonuc)."<br>";
 echo strlen($kdvFiyati)."<br>";
  
 // strlen stringte kaç kelime kullandığımızı sayar.


echo str_word_count($sonuc)."<br>";
echo str_word_count($kdvFiyati)."<br>";

// kaç cümle olduğunu hesaplar.
echo strtolower($sonuc)."<br>";
echo strtolower($kdvFiyati)."<br>";

// küçük harfe çevirir.


echo strtoupper($sonuc)."<br>";
echo strtoupper($kdvFiyati)."<br>";
// büyük harfe çevirir.



















?>    
</Body>
</html>

