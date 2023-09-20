<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title> My Work6</title>
</head>
<Body>
<?php


// key - value
 
// $plakalar = ["41","53","34"];
//$sehirler = ["kocaeli","rize","istanbul"];
// bu şekilde veri tutmak yerine tek hale getirebiliriz.

$plaka_bilgileri = array(
    
 "41" => "kocaeli",
 "53" => "rize",
 "34" => "istanbul"   
);
 
echo $plaka_bilgileri ["41"]."<br>";
echo $plaka_bilgileri ["53"]."<br>";
echo $plaka_bilgileri ["34"]."<br>";

echo "<br>";
$telefon_rehberim = [
"ali" => "44444444",
"mehmet" => "555555",
"ayşe" => "7777777",
"fatma" => "8888888"
];


echo $telefon_rehberim ["ali"]."<br>";
echo $telefon_rehberim ["mehmet"]."<br>";
echo $telefon_rehberim ["ayşe"]."<br>";
echo $telefon_rehberim ["fatma"]."<br>";

echo "<br>";
$urunlerim  = [
"urunAdi" => "Iphone 14",
"fiyat" => 30000 ,
"satistami" => true 


];



echo $urunlerim ["urunAdi"]." ".$urunlerim["fiyat"]."<br>";


$urunListem = [
    [
        "urunAdi" => "Iphone 14",
"fiyat" => 30000 ,
"satistami" => true 
    ],

    ["urunAdi" => "Iphone 15",
"fiyat" => 40000 ,
"satistami" => true 

],

[
    "urunAdi" => "Iphone 16",
"fiyat" => 60000 ,
"satistami" => true 
]


];
 echo $urunListem [0]["urunAdi"]."<br>";
 echo $urunListem [1]["urunAdi"]."<br>";
 echo $urunListem [2]["urunAdi"]."<br>";


















?>
</Body>
</html>