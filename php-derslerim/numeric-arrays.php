<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title> My Work5 </title>
</head>
<Body>
<?php


// Diziler.
//Numeric Diziler
// $ogrenciler = array("ali","ahmet","hasan"); $ogrenciler = ["ali","ahmet","hasan"]; aynı işe yarar aynı kullanımdır.
$ogrenciler = array("ali","ahmet","hasan");
echo $ogrenciler[0]."<br>";
echo $ogrenciler[1]."<br>";
echo $ogrenciler[2]."<br>";

// bu şekilde tanımladığımız öğrencilerden numara olarak veriyi çağrırız.
  echo gettype($ogrenciler);
  // bu şekilde bu verinin tipini öğreniriz.

  $numaralar = [100,200,300];
  echo $ogrenciler[0]. " ".$numaralar[0]."<br>";
  echo $ogrenciler[1]. " ".$numaralar[1]."<br>";
  echo $ogrenciler[2]. " ".$numaralar[2]."<br>";
  // bu şekilde öğrenciler ve numraları birleştiririz.
  


































?>
</Body>
</html>