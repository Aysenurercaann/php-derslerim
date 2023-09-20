<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title> My Work8 </title>
</head>
<Body>
<?php

$db_username = "aysenuuurercaan";
$db_password = "123456";
 


// if ($db_username == "aysenuuurercaan" and $db_password == "123456")  {
//     // true bloğu
//    echo "username veya parola doğru";

// } else {
//     //false bloğu
//     echo "username veya yanliş";
// }


if ($db_username == "aysenuuurercaan" )  {
  if($db_password == "123456"){
      echo "giriş başarılı";
  } else {
    echo "parola yanlış";
  }
 
}
else {
    echo "username yanlış";
}

?>
</Body>
</html>