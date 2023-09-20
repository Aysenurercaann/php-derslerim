<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title> My Work4 </title>
</head>
<Body>
<?php

$sayi1 = 25;
$sayi2 = 10;

echo "sonucumuz:  " .($sayi1+$sayi2)."<br>";
echo "sonucumuz:  " .($sayi1-$sayi2)."<br>";
echo "sonucumuz:  " .($sayi1*$sayi2)."<br>";
echo "sonucumuz:  " .($sayi1/$sayi2)."<br>";


echo "<br>";

echo is_int($sayi1)."<br>";

// sayinin bir int değer olup olmadığına bakar int değer ise sayfada 1 gösterir.

echo var_dump(is_int($sayi1))."<br>";

// boolen bir değer olarak cevap gelir.
// int olarak sorgulama yaptık float, numeric olarakta sorgulatabiliriz.
// echo var_dump(is_int("15"))."<br>"; (bu şekilde de sayı numeric mi fiye sorgulatabiliriz)
// echo ceil (4.3)."<br>"; sayıyı yukarı doğru yuvarlar.
//echo floor (4.3)."<br>"; sayıyı aşağı doğru yuvarlar.
//echo raound (4.3)."<br>"; sayıyı en yakın sayıya yuvarlar.
// echo sqrt (25)."<br>"; karekökünü alır.
// echo abs (-25)."<br>"; sayıyının mutlak değerini alır.












?>
</Body>
</html>

